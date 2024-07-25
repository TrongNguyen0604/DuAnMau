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

    public function home()
    {
        $listCourse = $this->courseModel->bll();
        require_once './views/Course/home.php';
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
        $name       = $_POST['name'];   
        $thumbnail  = $_POST['thumbnail'];
        $instructor = $_POST['instructor'];
        $duration   = $_POST['duration'];
        $price      = $_POST['price'];

        $this->courseModel->inset($name,$thumbnail, $instructor, $duration, $price);
        require_once './views/Course/create.php'; 
    }



    public function update(){
        $id = $_GET['id'];
        $courseEdit = $this->courseModel->find($id);
        require_once './views/course/update.php';
    }
    public function UpdatePost(){
        $id = $_GET['id'];

        // $courseEdit = $this->courseModel->find($id);

        $name       = $_POST['name'];   
        $thumbnail  = $_POST['thumbnail'];
        $instructor = $_POST['instructor'];
        $duration   = $_POST['duration'];
        $price      = $_POST['price'];
        $this->courseModel->update($name,$thumbnail, $instructor, $duration, $price);
        header('location:' .BASE_URL_ADMIN. "?act=list-course");
    }

}
?>