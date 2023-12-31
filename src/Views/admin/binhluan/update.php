<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <!-- <h5>List Sản phẩm</h5> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <!-- <li class="breadcrumb-item"><a href="#!">L</a> </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">

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
                                    <select name="iduser" id="iduser" class="form-control">
                                        <?php foreach ($users as $user) : ?>
                                            <option <?= $Binh_luan['iduser'] == $user['id'] ? 'selected' : '' ?> value="<?= $user['id'] ?>">

                                                <?= $user['name'] ?>

                                            </option>
                                        <?php endforeach; ?>
                                    </select><div class="pcoded-content">

<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-home bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Category</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Category</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Cập nhật </h5>
                            </div>
                            <div class="card-block">
                                <form action="" method="post">
                                    <label for="noidung">noidung</label>
                                    <input type="text" name="noidung" class="form-control" value="<?= $binhluan['noidung'] ?>">
                                    
                                    <label for="iduser">iduser</label>
                                    <input type="text" name="iduser" class="form-control" value="<?= $binhluan['iduser'] ?>">

                                    <label for="idpro">idpro</label>
                                    <input type="text" name="idpro" class="form-control" value="<?= $binhluan['idpro'] ?>">

                                    <label for="ngaybinhluan">ngaybinhluan</label>
                                    <input type="date" name="ngaybinhluan" class="form-control" value="<?= $binhluan['ngaybinhluan'] ?>">

                                    <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                    <a href="/admin/categories" class="btn btn-primary mt-3">Quay lại d/s</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

                                    <label for="idpro" class="mt-3">ID Pro</label>
                                    <select name="idpro" id="idpro" class="form-control">
                                        <?php foreach ($sanpham as $San_pham) : ?>
                                            <option <?= $Binh_luan['idpro'] == $San_pham['id'] ? 'selected' : '' ?> value="<?= $San_pham['id'] ?>">

                                                <?= $San_pham['name'] ?>

                                            </option>
                                        <?php endforeach; ?>
                                    </select>

                                    <label for="ngaybinhluan" class="mt-3">Address</label>
                                    <input type="date" name="ngaybinhluan" class="form-control" value="<?= $Binh_luan['ngaybinhluan'] ?>">

                                    <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                    <a href="/admin/binhluan" class="btn btn-primary mt-3">Quay lại d/s</a>
                                </form>
                            </div>
                        </body>

                        </html>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>