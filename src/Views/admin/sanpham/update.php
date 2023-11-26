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
                                <h1>Cập nhật sản phẩm</h1>

                                <form action="" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $san_pham['id'] ?>">

                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" value="<?= ($san_pham['name']) ?>">

                                    <label for="iddm" class="mt-3">Danh mục</label>
                                    <select name="iddm" id="iddm" class="form-control">
                                        <?php foreach ($categories as $category) : ?>
                                            <option <?= $san_pham['iddm'] == $category['id'] ? 'selected' : '' ?> value="<?= $category['id'] ?>">

                                                <?= $category['name'] ?>

                                            </option>
                                        <?php endforeach; ?>
                                    </select>

                                    <label for="price" class="mt-3">Price</label>
                                    <input type="text" name="price" class="form-control" value="<?= ($san_pham['price']) ?>">

                                    <label for="img" class="mt-3">Img</label>
                                    <input type="file" name="img" id="img" class="form-control">
                                    <input type="hidden" name="img_current" id="img_current" class="form-control" value="<?= $san_pham['img'] ?>">
                                    <img src="<?= $product['img'] ?>" alt="" width="100px">

                                    <label for="mota" class="mt-3">Mô Tả</label>
                                    <input type="text" name="mota" class="form-control" value="<?= ($san_pham['mota']) ?>">

                                    <button type="/admin/sanpham" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                    <a href="/admin/sanpham" class="btn btn-primary mt-3">Quay lại d/s</a>
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