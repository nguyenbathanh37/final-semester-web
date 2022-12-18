<?php    
    class BaseController{
        public function view($url,array $data = []){
            // Đặt từng key trong mảng data thành tên biến với giá trị là $value
            foreach($data as $key => $value){
                $$key = $value;
            }

            $url = 'Views'.DIRECTORY_SEPARATOR.$url;
            require ($url);
        }

        // Khởi tạo model
        public function model($nameModel)
        {
            require('Models/'.$nameModel.'.php');
            return new $nameModel;
        }

        // Lấy ảnh đại diện của user;
        public function getAvatar()
        {
            $username = $_COOKIE["username"];
            $sql = "SELECT * FROM user WHERE username = '$username'";
            $data = $this->DB->query($sql);
            $r = $data->fetch_assoc();
            return $r["img"];
        }
    }
?>