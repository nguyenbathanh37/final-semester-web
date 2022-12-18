<?php    
    class VideoModel{
        private $DB;

        public function __construct() {
            $this->DB = new DataBase();
        }

        public function getAllVideo(){
            $username = $_COOKIE["username"];
            $sql = "SELECT * FROM video WHERE username = '$username'";
            try{
                $result = $this->DB->query($sql);
                $data = array();
                if($result->num_rows > 0){
                    while($r = $result->fetch_assoc()){
                        $data[] = array("id"=>$r["id"], "name"=>$r["name"], "date"=>$r["date"], "mode"=>$r["mode"], "video"=>$r["video"]);
                    }
                }
                echo json_encode(array('status'=>true, 'data'=>"Thành công"));
            }catch(PDOException $e){
                die(json_encode(array('status'=>false, 'data'=>$e->getMessage())));
            }
        }

        public function changeMode($id, $mode){
            $username = $_COOKIE["username"];
            $id = (int)$_POST["id"];
            $mode = (int)$_POST["mode"];
            try{
                $sql = "UPDATE video SET mode = $mode WHERE id = id and username = '$username'"; 
                $result = $this->DB->query($sql);
                echo json_encode(array('status'=>true, 'data'=>'Thay đổi chế độ thành công'));
            }catch(PDOException $e){
                echo json_encode(array('status'=>false, 'data'=>$e->getMessage()));
            }
        }

        public function getAllVideoOfUser($username){
            $sql = "SELECT * FROM video WHERE username = '$username' and mode = 0";
            try{
                $result = $this->DB->query($sql);
                $data = array();
                if($result->num_rows > 0){
                    while($r = $result->fetch_assoc()){
                        $data[] = array("id"=>$r["id"], "name"=>$r["name"], "date"=>$r["date"], "mode"=>$r["mode"], "video"=>$r["video"]);
                    }
                }
                echo json_encode(array('status'=>true, 'data'=>"Thành công"));
            }catch(PDOException $e){
                die(json_encode(array('status'=>false, 'data'=>$e->getMessage())));
            }
        }

        public function uploadVideo(){
            
        }

        public function getVideoFeature(){
            $username = $_COOKIE["username"];
            $sql = "SELECT v.*, u.fullname, u.img FROM feature f, video v, user u WHERE f.id_video = v.id_video and v.username = u.username";
            $result = $this->DB->query($sql);
            $data = array();
            if($result->num_rows > 0){
                while($r = $result->fetch_assoc()){
                    $view = (int)$r["view"];
                    $view_format = '';
                    while($view > 1000){
                        $remain = $view%1000;
                        $view = (int)($view/1000);
                        $view_format = ','.$remain.$view_format;
                    }
                    $view_format = $view.$view_format;
                    $data[] = ["id_video"=>$r["id_video"],"namevideo"=>$r["namevideo"],"view"=>$view_format,"dayupload"=>$r["dayupload"],"thumbnail"=>$r["thumbnail"], "mode"=>$r["mode"], "fullname"=>$r["fullname"], "link"=>$r["link"], "avt"=>$r["img"]];
                }
            }
            return $data;
        }

        public function getVideoLiked(){
            $username = $_COOKIE["username"];
            $sql = "SELECT v.*, u.fullname, u.img FROM liked l, video v, user u WHERE l.id_video = v.id_video and l.username = '$username' and v.username = u.username";
            $result = $this->DB->query($sql);
            $data = array();
            if($result->num_rows > 0){
                while($r = $result->fetch_assoc()){
                    $view = (int)$r["view"];
                    $view_format = '';
                    while($view > 1000){
                        $remain = $view%1000;
                        $view = (int)($view/1000);
                        $view_format = ','.$remain.$view_format;
                    }
                    $view_format = $view.$view_format;
                    $data[] = ["id_video"=>$r["id_video"],"namevideo"=>$r["namevideo"],"view"=>$view_format,"dayupload"=>$r["dayupload"],"thumbnail"=>$r["thumbnail"], "mode"=>$r["mode"], "fullname"=>$r["fullname"], "link"=>$r["link"], "avt"=>$r["img"]];
                }
            }
            return $data;
        }

        public function getHistory()
        {
            $username = $_COOKIE["username"];
            $sql = "SELECT v.*, u.fullname, u.img, h.date_watch FROM history h, video v, user u WHERE h.id_video = v.id_video and h.username = '$username' and v.username = u.username ORDER BY h.date_watch DESC";
            $result = $this->DB->query($sql);
            $data = array();
            if($result->num_rows > 0){
                while($r = $result->fetch_assoc()){
                    $view = (int)$r["view"];
                    $view_format = '';
                    while($view > 1000){
                        $remain = $view%1000;
                        $view = (int)($view/1000);
                        $view_format = ','.$remain.$view_format;
                    }
                    $view_format = $view.$view_format;
                    $data[] = ["id_video"=>$r["id_video"],"namevideo"=>$r["namevideo"],"view"=>$view_format,"dayupload"=>$r["dayupload"],"thumbnail"=>$r["thumbnail"], "mode"=>$r["mode"], "fullname"=>$r["fullname"], "link"=>$r["link"], "avt"=>$r["img"]];
                }
            }
            return $data;
        }
    }
?>