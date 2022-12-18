<?php    
    include 'BaseController.php';

    class HomeController extends BaseController{
        private $DB, $videoModel;

        public function __construct() {
            // Khởi tạo và kết nối database
            $this->DB = $this->model('DataBase');
            $this->videoModel = $this->model('VideoModel');
        }

        public function index()
        {
            // kiểm tra người dùng đã đăng nhập chưa
            if(!isset($_COOKIE["username"])){
                header("Location: index.php?action=login");
                return;
            }

            // Lấy ảnh đại diện của user;
            $username = $_COOKIE["username"];
            $sql = "SELECT * FROM user WHERE username = '$username'";
            $data = $this->DB->query($sql);
            $r = $data->fetch_assoc();
            $avt = $r["img"];

            // trả về trang chủ nếu người dùng đã đăng nhập
            $listVideo = $this->videoModel->getVideoFeature();
            $content = array('listVideo'=>$listVideo, 'avt'=>$avt);

            return $this->view("Home/Home.php", $content);
        }
        
        public function login()
        {
            // kiểm tra xem người dùng đã đăng nhập chưa
            if(isset($_COOKIE["username"])){
                return $this->index();
            }
            $errorMessage = array();
            $username = $password = '';
            if(isset($_POST["submit"])){
                $username = $_POST["username"];
                $password = $_POST["password"];

                // Lấy tài khoản từ database
                $sql = "SELECT * FROM user WHERE username = '$username'"; 
                $user = $this->DB->query($sql);
                if($user->num_rows != 0){
                    $r = $user->fetch_assoc();

                    // kiểm tra xem mật khẩu có đúng không
                    if($r['password'] == $password){
                        setcookie("username", $username, time() + 30*24*60*60, '/');
                        header("Location: index.php");
                        return;
                    }else array_push($errorMessage, 'Sai mật khẩu');
                }else{
                    array_push($errorMessage, 'Tài khoản không tồn tại');
                }
            }
            $content = array('errorMessage'=>$errorMessage, 'username'=>$username, 'password'=>$password);
            return $this->view("SignIn_SignUp/SignIn.php", $content);
        }

        public function logup(){
            // kiểm tra xem người dùng đã đăng nhập chưa
            if(isset($_COOKIE["username"])){
                header("Location: index.php");
                return;
            }
            $errorMessage = array();
            $fullname = $username = $password = $email = $confirm_password = '';
            if(isset($_POST["submit"])){
                $fullname = $_POST["fullname"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $confirm_password = $_POST["confirm_password"];

                // kiểm tra xem mật khẩu và mật khẩu nhập lại có giống nhau không
                if($password != $confirm_password) 
                    array_push($errorMessage, 'Mật khẩu nhập lại không khớp.');

                // kiểm tra xem username đã được sử dụng chưa
                $sql = "SELECT * FROM user WHERE username = '$username'"; 
                $data = $this->DB->query($sql);
                if($data->num_rows != 0){
                    array_push($errorMessage, 'username đã được sử dụng');
                }else{
                    // thêm tài khoản vào database
                    $sql = "INSERT INTO user (username, password, fullname, email, img) VALUES(?, ?, ?, ?, 'assets/images/non-avt.png')";
                    $param = [$username, $password, $fullname, $email];
                    $this->DB->exec($sql, 'ssss', $param);
                    header("Location: index.php?action=login");
                    return;
                }
            }
            $content = array('errorMessage'=> $errorMessage, 'fullname'=>$fullname, 'username'=>$username, 'password'=>$password, 'email'=>$email, 'confirm_password'=>$confirm_password);
            return $this->view("SignIn_SignUp/SignUp.php", $content);
        }

        public function logout(){
            // xóa cookies username đi
            setcookie("username", "", time() - 3600);
            echo json_encode(array('status'=>true, 'data'=>'Đăng xuất thành công'));
        }
    }
?>