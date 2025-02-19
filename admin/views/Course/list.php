<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="list.css">
    <script src="https://kit.fontawesome.com/3efea8ee37.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sanpham.css">
</head>
    
<body>
    <div id="layout">
        <hr>
        <nav class="tong">
           
            <a class="Shopping" href="?act=home-course">Shopping Cart</a>
            <div class="menumid">
                <ul>
                <a href="?act=home-course">Home</a>
                <a href="?act=list-course">Products</a>
                    <a href="">My Account</a>
                </ul>
            </div>
            <div class="search">
                <a href="dangnhap.html">Đăng nhập</a>
                <a href="dangki.html">Đăng kí</a>
                
                <i class="fas fa-search hiii"></i>
                <i class="fas fa-shopping-cart huu"></i>

                <div class="menu">
                    <i class="fas fa-bars menu-button"></i>
                    <div class="menu-content">
                        <a href="?act=home-course">Trang chủ</a>
                        <a href="?act=create-course">Thêm sản phẩm</a>
                        <a href="#item3">Thêm danh mục</a>
                        <a href="#item4">Danh sách sản phẩm</a>
                        </div>
                    </div>
                <script src="menu.js"></script>
            </div>
        </nav>
        <hr>

        <article>
            <!-- <div class="banner">
                <img src="img/banner.jpg" alt=""> 
            </div> -->
            <!-- <div class="banner">
                <form action="1.php">

                </form>
            </div>
            <div class="recently">
                Recently Added Products
            </div> -->
          

            <div class="container">
            <div class="row">
            <h1>Danh sách sản phẩm</h1>
            <a href="?act=create-course"  class="btn btn-primary">Tạo sản phẩm </a>
        </div>
        <table class="table table-striped" >
        <tr>
            <th>Đinh danh</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh sản phảm</th>
            <th>Giá gốc</th>
            <th>Giá sell</th>
            <th>.</th>
            <th>Thao tác</th>
        </tr>
        <?php
        foreach ($listCourse as $course) {
        ?>
            <tr>
                <td><?= $course['id'] ?></td>
                <td><?= $course['name'] ?></td>
                <td><?= $course['thumbnail'] ?></td>
                <td><?= $course['instructor'] ?></td>
                <td><?= $course['duration'] ?></td>
                <td><?= $course['price'] ?></td>
                <td>
                    <a href="?act=delete-course&id=<?= $course['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?')"  class="btn btn-danger">Xóa</a>
                    <a href="?act=update-course&id=<?= $course['id'] ?>" onclick="return confirm('Bạn có muốn sửa không?')" class="btn btn-primary" >Sửa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
        </article>
        <hr>
       <footer>
            <div>
                <h3>Địa chỉ : 88/955E Lê Đức Thọ Phường 6 Quận Gò Vấp, Thành Phố Hồ Chí Minh <br>

                    Điện thoại : (028) 39163096 <br>

                    Email : Fa_tranhungdao@hcm.edu.vn <br>
                    Website : thpttranhungdao.hcm.edu.vn</h3>
            </div>
            <div class="fb">
                <img src="img/Screenshot 2024-03-23 040733.png" alt="">
            </div>
        </footer> 

    </div>
</body>

</html>