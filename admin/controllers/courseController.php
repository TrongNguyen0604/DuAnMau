<?php
class CourseController
{
    public $courseModel;
    public function __construct()
    {
        $this->courseModel = new course();
    }


    public function list()
    {
        $listCourse = $this->courseModel->all();
        require_once './views/Course/list.php';
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->courseModel->delete($id);

    }

    public function create()
    {
        require_once './views/Course/create.php';
    }

    public function createPost()
    {
        $name = $_POST['name'];
        $instructor = $_POST['instructor'];
        $duration = $_POST['duration'];
        $price = $_POST['price'];
        $this->courseModel->inset($name, $instructor, $duration, $price);
    }



}
?>