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
                            <title>Category List</title>

                            <!-- Latest compiled and minified CSS -->
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

                            <!-- Latest compiled JavaScript -->
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
                        </head>

                        <body>
                            <div class="container">
                                <h1>Category List</h1>

                                <a href="/admin/binhluan/create" class="btn btn-info">Thêm</a>

                                <table class="table">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nội Dung</th>
                                        <th>ID User</th>
                                        <th>ID Pro</th>
                                        <th>Ngày Bình Luận</th>
                                    </tr>

                                    <?php foreach ($binhluan as $Binh_luan) : ?>
                                        <tr>
                                            <td><?= $Binh_luan['id'] ?></td>
                                            <td><?= $Binh_luan['noidung'] ?></td>
                                            <td><?= $arrayUserIdName[$Binh_luan['iduser']] ?></td>
                                            <td><?= $arraySanPhamIdName[$Binh_luan['idpro']] ?></td>
                                            <td><?= $Binh_luan['ngaybinhluan'] ?></td>
                                            <td>
                                                <a href="/admin/binhluan/update?id=<?= $Binh_luan['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                <form action="/admin/binhluan/delete?id=<?= $Binh_luan['id'] ?>" method="post">
                                                    <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </table>
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