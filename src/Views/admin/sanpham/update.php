<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Update</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Cập nhật sản phẩm</h1>

        <form action="/path/to/your/data-processing-file.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?= ($san_pham['name']) ?>">

            <label for="iddm" class="mt-3">Danh mục</label>
            <input type="text" name="iddm" class="form-control" value="<?= ($san_pham['iddm']) ?>">

            <label for="price" class="mt-3">Price</label>
            <input type="text" name="price" class="form-control" value="<?= ($san_pham['price']) ?>">

            <label for="img" class="mt-3">Img</label>
            <input type="file" name="img" class="form-control" value="<?= ($san_pham['img']) ?>">

            <label for="mota" class="mt-3">Mô Tả</label>
            <input type="text" name="mota" class="form-control" value="<?= ($san_pham['mota']) ?>">

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/users" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>

</html>