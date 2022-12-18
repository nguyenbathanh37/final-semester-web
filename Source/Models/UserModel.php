<?php
    class UserModel{
        private $DB;

        public function __construct() {
            $this->DB = new DataBase();
        }

        public function login($username, $password){
            
        }

        public function getAllUser(){
            return null;
        }

        public function changePassword(){
            $username = $_COOKIE["username"];
            $oldpass = $_POST["oldpass"];
            $newpass = $_POST["newpass"];
            $confirm_pass = $_POST["confirm_pass"];
            if($newpass != $confirm_pass) 
                die(json_encode(array('status'=>false, 'data'=>'Mật khẩu nhập lại không khớp')));
            try{
                $sql = "UPDATE user SET password = '$newpass' WHERE username = '$username' and password = '$oldpass'"; 
                $data = $this->DB->query($sql);
                echo json_encode(array('status'=>true, 'data'=>'Thay đổi mật khẩu thành công'));
            }catch(PDOException $e){
                echo json_encode(array('status'=>false, 'data'=>$e->getMessage()));
            }
        }

        public function changeInfo(){
            $name = $_POST["full_name"];
        }

        public function getUserSubscribed()
        {
            $username = $_COOKIE["username"];
            $sql = "SELECT u.* FROM subscribe s, user u WHERE s.username = '$username' and s.registered_account = u.username";
            $result = $this->DB->query($sql);
            $data = array();
            if($result->num_rows > 0){
                while($r = $result->fetch_assoc()){
                    $account = $r["username"];
                    $sub = $this->DB->query("SELECT * FROM subscribe s WHERE s.registered_account = '$account'");
                    $num_sub = $sub->num_rows;
                    $sub_format = '';
                    while($num_sub > 1000){
                        $remain = $num_sub%1000;
                        $num_sub = (int)($num_sub/1000);
                        $sub_format = ','.$remain.$sub_format;
                    }
                    $sub_format = $num_sub.$sub_format;
                    $data[] = ["username"=>$r["username"], "fullname"=>$r["fullname"], "num_sub"=>$sub_format, "avt"=>$r["img"]];
                }
            }
            return $data;
        }
    }
?>