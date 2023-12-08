<div class="pcoded-content">

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
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" value="<?= $order['name'] ?>">

                                        <label for="email">email</label>
                                        <input type="email" name="email" class="form-control" value="<?= $order['email'] ?>">

                                        <label for="phone">phone</label>
                                        <input type="text" name="phone" class="form-control" value="<?= $order['phone'] ?>">

                                        <label for="address">address</label>
                                        <input type="text" name="address" class="form-control" value="<?= $order['address'] ?>">

                                        <label for="total_price">total_price</label>
                                        <input type="text" name="total_price" class="form-control" value="<?= $order['total_price'] ?>">

                                    

                                        <label for="status_id">Status</label>
                                        <select name="status_id" id="status_id" class="form-control">
                                            <?php foreach ($status as $lo) : ?>
                                                <option 
                                                    <?= $order['status_id'] == $lo['id'] ? 'selected' : '' ?> 
                                                    value="<?= $lo['id'] ?>">
                                                    
                                                    <?= $lo['name'] ?>

                                                </option>
                                            <?php endforeach; ?>
                                        </select>

                                        <label for="created_at"> Created At</label>
                                        <input type="text" name="created_at" class="form-control" value="<?= $order['created_at'] ?>">


                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/orders" class="btn btn-primary mt-3">Quay lại d/s</a>
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