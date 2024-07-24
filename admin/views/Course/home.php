<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ </title>
    <link rel="stylesheet" href="list.css">
    <script src="https://kit.fontawesome.com/3efea8ee37.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sanpham.css">
</head>
    
<body>
    <div id="layout">
      
        <nav class="tong">
            <!-- <div class="logo">
                <img src="img/LOGO.jpg" alt="" width="60px">
            </div> -->
            <a class="Shopping" href="">Shopping Cart</a>
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
                        <a href="#item1">Trang chủ</a>
                        <a href="?act=create-course">Thêm sản phẩm</a>
                        <a href="#item3">Thêm danh mục</a>
                        <a href="?act=list-course">Danh sách sản phẩm</a>
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
           <div class="banner">
                <form action="1.php">

                </form>
            </div>
            <div class="recently">
                Recently Added Products
            </div> 
          
            <div class="sp">
        <?php foreach ($listCourse as $course) { ?>
            <div class="anh1">
                <img src="img/dongho.png" alt="">
                <div class="gia">
                   <div class="name"><?= $course['name']?></div>      <!-- //tên -->
                    <h3>
                    <del>
                        <?= $course['duration']?> $       <!-- //giá  sell   -->
                    </del>
                        <?= $course['instructor']?> $  <!-- //giá gốc    -->                     
                    </h3>
                </div>
              <div class="buy">
                       <button type="submit">Mua</button>
              </div>
            </div>
        <?php } ?>
    </div>
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