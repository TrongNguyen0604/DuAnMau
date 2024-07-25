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
    public function bll(){
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

    public function inset($name,$thumbnail, $instructor, $duration, $price){
        $sql="INSERT INTO `courses` ( `name`, `thumbnail`, `instructor`, `duration`, `price`) VALUES ( '$name',null, '$instructor', ' $duration', '$price')";
        $this->conn->exec($sql);
        header('location:' .BASE_URL_ADMIN. "?act=list-course");
    }

  
    //lấy thông tin của course cho trc
    public function find($id)
    {
        $sql = "SELECT * FROM courses WHERE `courses`.`id` = {$id}";
        $stml = $this->conn->query($sql);
        $data = $stml->fetch();
        return $data;
    }
 
    //cập nhật giá trị của 1 course
    public function update($name,$thumbnail, $instructor, $duration, $price){
        $sql= "UPDATE `courses` SET  `name` = '$name', `thumbnail` = '$thumbnail', `instructor` = '$instructor', `duration` = '$duration', `price` = '$price' WHERE `courses`.`id` = {$name}";
        $this->conn->exec($sql);
    }







    public function __destruct(){
        $this->conn=null;
    }
}





?>