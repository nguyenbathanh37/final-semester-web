<?php
class DataBase{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "qlvideo";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }

    public function query($query)
    {
        return $this->conn->query($query);
    }

    public function exec($query, $format, $param)
    {
        $sttm = $this->conn->prepare($query);
        $sttm->bind_param($format, ...$param);
        return $sttm->execute();
    }

    public function close(){
        $this->conn->close();
    }
}
?>