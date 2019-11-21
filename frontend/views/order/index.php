<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">List Order</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>ID<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Status<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Created At<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $order['id'] ?></td>
                                    <td class="text-center"><?php echo $order['status'] ?></td>
                                    <td class="text-center"><?php echo $order['created_at'] ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-success btn-block" href="<?php echo base_url("order/edit?id={$order['id']}") ?>"> Update</a>
                                        <a class="btn btn-success btn-block" href="<?php echo base_url("order/show?id={$order['id']}") ?>"> See More</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Status<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Created At<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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