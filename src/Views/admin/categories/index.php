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

                                <a href="/admin/categories/create" class="btn btn-info">Thêm</a>

                                <table class="table">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php foreach ($categories as $category) : ?>
                                        <tr>
                                            <td><?= $category['id'] ?></td>
                                            <td><?= $category['name'] ?></td>
                                            <td>
                                                <a href="/admin/categories/update?id=<?= $category['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                <form action="/admin/categories/delete?id=<?= $category['id'] ?>" method="post">
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