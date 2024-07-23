<?php
class Course{
    public $conn;
    public function __construct(){
        $this->conn=connect_db();
    }

    public function all(){
        $sql="SELECT * FROM `courses`";
        $stmt=$this->conn->query($sql);
        $data=$stmt->fetchAll();
        return $data;
    }

    public function delete($id){
        $sql="DELETE FROM courses WHERE `courses`.`id` = {$id}";
        $this->conn->exec($sql);
        header('location:' .BASE_URL_ADMIN. "?act=list-course");
    }

    public function inset($name, $instructor, $duration, $price){
        $sql="INSERT INTO `courses` ( `name`, `thumbnail`, `instructor`, `duration`, `price`) VALUES ( '$name',null, '$instructor', ' $duration', '$price')";
        $this->conn->exec($sql);
        header('location:' .BASE_URL_ADMIN. "?act=list-course");
    }







    public function __destruct(){
        $this->conn=null;
    }
}





?>