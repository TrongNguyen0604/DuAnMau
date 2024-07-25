<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chỉnh sửa</title>
    <link rel="stylesheet" href="create.css">
    <script src="https://kit.fontawesome.com/3efea8ee37.js" crossorigin="anonymous"></script>
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
                        <a href="#item1">Danh sách danh mục</a>
                        <a href="?act=create-course">Thêm sản phẩm</a>
                        <a href="#item3">Thêm danh mục</a>
                        <a href="#item4">Danh sách sản phẩm</a>
                        </div>
                    </div>
                <script src="scripts.js"></script>
              
            </div>
        </nav>
       
        
    <div class="container">
        <div class="row">
            <h1>Sửa sản phẩm</h1>
          
            <form action="?act=update-post&id=<?php echo $userEdit['id'] ?>" method="post" enctype="multipart/form-data" >
             <div >
                <label class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" value="<?php echo $courseEdit['name'] ?>" >
             </div>
             <div >
                <label class="form-label">Hình ảnh sản phẩm </label>
                <input type="file" class="form-control" name="thumbnail" value="<?php echo $courseEdit['thumbnail'] ?>">
             </div>
             <div >
                <label class="form-label">Giá gốc sản phẩm</label>
                <input type="number" class="form-control" name="price" value="<?php echo $courseEdit['price'] ?>">
             </div>
             <div >
                <label class="form-label">Giá sell</label>
                <input type="number" class="form-control" name="instructor" value="<?php echo $courseEdit['instructor'] ?>">
             </div>
             <div >
                <label class="form-label">Thời lượng khóa học</label>
                <input type="number" class="form-control" name="duration" value="<?php echo $courseEdit['duration'] ?>">
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