<?php   
    include('BaseController.php');

    class UserController extends BaseController{
        private $DB, $videoModel, $userModel;

        public function __construct() {
            // Khởi tạo và kết nối database
            $this->DB = $this->model('DataBase');
            $this->videoModel = $this->model('VideoModel');
            $this->userModel = $this->model('UserModel');
        }

        public function index()
        {
            
        }
        
        public function subscribed(){
            // Lấy ảnh đại diện của user;
            $avt = $this->getAvatar();
            
            $listUser = $this->userModel->getUserSubscribed();
            $content = array('listUser'=>$listUser, 'avt'=>$avt);

            return $this->view("User/Subscribed.php", $content);
        }

        public function liked(){
            // Lấy ảnh đại diện của user;
            $avt = $this->getAvatar();
            
            $listVideo = $this->videoModel->getVideoLiked();
            $content = array('listVideo'=>$listVideo, 'avt'=>$avt);

            return $this->view("Home/Home.php", $content);
        }

        public function history()
        {
            // Lấy ảnh đại diện của user;
            $avt = $this->getAvatar();
            
            $listVideo = $this->videoModel->getHistory();
            $content = array('listVideo'=>$listVideo, 'avt'=>$avt);

            return $this->view("Home/Home.php", $content);
        }

        public function mylist()
        {
            
        }

        // Lấy ảnh đại diện của user;
        public function getAvatar()
        {
            $username = $_COOKIE["username"];
            $sql = "SELECT * FROM user WHERE username = '$username'";
            $data = $this->DB->query($sql);
            $r = $data->fetch_assoc();
            $avt = $r["img"];
            return $avt;
        }
    }
?>