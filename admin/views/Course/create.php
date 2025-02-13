<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo sản phẩm</title>
    <link rel="stylesheet" href="create.css">
    <script src="https://kit.fontawesome.com/3efea8ee37.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="list.css">
</head>

<body>
    <div id="layout">
        <hr>
        <nav class="tong">
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
                        <a href="?act=home-course">Trang chủ</a>
                        <a href="?act=create-course">Thêm sản phẩm</a>
                        <a href="#item3">Thêm danh mục</a>
                        <a href="?act=list-course">Danh sách sản phẩm</a>
                        </div>
                    </div>
                <script src="menu.js"></script>
              
            </div>
        </nav>
       
        
    <div class="container">
        <div class="row">
            <h1>Tạo sản phẩm</h1>
            <form action="?act=create-post" method="post">
             <div >
                <label class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name">
             </div>
             <div >
                <label class="form-label">Hình ảnh sản phẩm </label>
                <input type="file" class="form-control" name="thumbnail">
             </div>
             <div >
                <label class="form-label">Giá gốc sản phẩm</label>
                <input type="number" class="form-control" name="price">
             </div>
             <div >
                <label class="form-label">Giá sell</label>
                <input type="number" class="form-control" name="instructor">
             </div>
             <div >
                <label class="form-label">Thời lượng khóa học</label>
                <input type="number" class="form-control" name="duration">
             </div>
            
             <button type="submit" class="btn btn-primary">submit</button>
        </form>
        </div>
    </div>
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