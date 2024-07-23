<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Tổng Quan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include ('./views/components/navbar.php'); ?>

    <div class="container">
        <div class="row">
            <h1>Tạo danh sách User</h1>
            <form action="?act=create-post" method="post">
                <div>
                    <label class="form-label">Tên khóa học</label>
                    <input type="text" class="form-control"  name="name">
                </div>
                <div>
                    <label class="form-label">Hình ảnh thu nhỏ</label>
                    <input type="file" class="form-control"  name="thumbnail">
                </div>
                <div>
                    <label class="form-label">Giảng viên</label>
                    <input type="text" class="form-control"  name="instructor">
                </div>
                <div>
                    <label class="form-label">Thời lượng khóa học</label>
                    <input type="number" class="form-control"  name="duration">
                </div>
                <div>
                    <label class="form-label">Giá khóa học</label>
                    <input type="number" class="form-control"  name="price">
                </div>
                <button class="btn btn-danger" type="submit">sbumit</button>
            </form>
        </div>
    </div>
</body>

</html>