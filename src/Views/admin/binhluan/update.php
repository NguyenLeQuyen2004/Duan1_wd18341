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
        <h1>Cập nhật User</h1>

        <form action="" method="post">
            <label for="noidung">Nội Dung</label>
            <input type="text" name="noidung" class="form-control" value="<?= $Binh_luan['noidung'] ?>">

            <label for="iduser" class="mt-3">ID User</label>
            <input type="text" name="iduser" class="form-control" value="<?= $Binh_luan['iduser'] ?>">

            <label for="idpro" class="mt-3">Password</label>
            <input type="text" name="idpro" class="form-control" value="<?= $Binh_luan['idpro'] ?>">

            <label for="ngaybinhluan" class="mt-3">Address</label>
            <input type="date" name="ngaybinhluan" class="form-control" value="<?= $Binh_luan['ngaybinhluan'] ?>">

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/binhluan" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>

</html>