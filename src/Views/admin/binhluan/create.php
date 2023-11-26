<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User create</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Tạo mới User</h1>

        <form action="" method="post">
            <label for="noidung">Nội dung</label>
            <input type="text" name="noidung" class="form-control">

            <label for="iduser" class="mt-3">ID User</label><br>
            <select name="iduser" id="iduser" class="form-control">
                    <?php foreach ($users as $user) : ?>
                        <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>
                    <?php endforeach; ?>
            </select>

            <label for="idpro" class="mt-3">ID Pro</label><br>
            <select name="idpro" id="idpro" class="form-control">
                    <?php foreach ($sanpham as $San_pham) : ?>
                        <option value="<?= $San_pham['id'] ?>"><?= $San_pham['name'] ?></option>
                    <?php endforeach; ?>
            </select>

            <label for="ngaybinhluan" class="mt-3">Ngày Bình Luận</label>
            <input type="date" name="ngaybinhluan" class="form-control" >

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/users" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>

</html>
