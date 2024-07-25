<?php 

// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ


// Require toàn bộ file Models
require_once './models/course.php';


// Require toàn bộ file Controllers
require_once './controllers/DashboardController.php';
require_once './controllers/courseController.php';




// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match
// Các Thầy.Cô có thể dùng Switch-Case
match ($act) {
    // Trang chủ
    '/' => (new DashboardController)->dashboard(),
     'list-course' => (new courseController)->list(),
     'delete-course' => (new courseController)->delete(),
     'create-course' => (new courseController)->create(),
     'create-post'  => (new courseController)->createPost(),
     'update-course'  => (new courseController)->update(),
     'update-post'=>(new courseController)->UpdatePost(),
     'home-course' => (new courseController)->home(),
};