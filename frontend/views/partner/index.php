<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Basic Table
                <a class="btn btn-primary float-right" href="<?php echo base_url('partner/add') ?>">ADD</a>
            </h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>ID<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Name<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Email<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Address<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Phone Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Area<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($partners as $partner) : ?>
                                <tr>
                                    <td><?php echo $partner['id'] ?></td>
                                    <td><?php echo $partner['name'] ?></td>
                                    <td><?php echo $partner['email'] ?></td>
                                    <td><?php echo $partner['address'] ?> </td>
                                    <td><?php echo $partner['phone_number'] ?></td>
                                    <td><?php echo $partner['area'] ?></td>
                                    <td>
                                        <a class="btn btn-primary btn-block" href="<?php echo base_url("partner/edit?id={$partner['id']}") ?>"> Update</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</i></th>
                                <th>Name</i></th>
                                <th>Email</i></th>
                                <th>Address</i></th>
                                <th>Phone Number</i></th>
                                <th>Area</i></th>
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