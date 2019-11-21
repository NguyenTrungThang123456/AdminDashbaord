<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">List Product
                <a class="btn btn-primary float-right" href="<?php echo base_url('product/add') ?>">ADD</a>
            </h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>ID<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Name<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Price(VNĐ)<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Image<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Quantity<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Category<i class="fa fa-sort float-right" aria-hidden="true"></th>
                                <th>Brand<i class="fa fa-sort float-right" aria-hidden="true"></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $product['id'] ?></td>
                                    <td class="text-center"><?php echo $product['name'] ?></td>
                                    <td class="text-center"><?php echo $product['price'] ?></td>
                                    <td class="text-center"><img width="100" src="<?php echo IMG_URL . $product['image'] ?>"></td>
                                    <td class="text-center"><?php echo $product['quantity'] ?></td>
                                    <td class="text-center"><?php echo $product['categories_id'] ?></td>
                                    <td class="text-center"><?php echo $product['brand_id'] ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-success btn-block" href="<?php echo base_url("product/edit?id={$product['id']}") ?>"> Update</a>
                                        <a class="btn btn-success btn-block" href="<?php echo base_url("product/destroy?id={$product['id']}") ?>"> Delete</a>
                                        <a class="btn btn-success btn-block" href="<?php echo base_url("product/show?id={$product['id']}") ?>"> See More</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</i></th>
                                <th>Name</i></th>
                                <th>Price(VNĐ)</i></th>
                                <th>Image</i></th>
                                <th>Quantity</i></th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>