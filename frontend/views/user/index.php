<script language="JavaScript" type="text/javascript">
    function checkDelete() {
        return confirm("Bạn Có Chắc Chắn Muốn Xoá User Này");
    }
</script>


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">List User<a class="btn btn-primary float-right" href="<?php echo base_url('product/add') ?>">ADD</a>
            </h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th >Name</th>
                            <th>Address</th>
                            <th >Phone Number</th>
                            <th>Email</th>
                            <th >Password</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['address'] ?> </td>
                                <td><?php echo $user['phone_number'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><input type="password"value="<?php echo $user['password'] ?>"></td>
                                <td><?php echo $user['role'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary">
                                        <a style="color:white; text-decoration: none;" href="<?php echo base_url("user/edit?id={$user['id']}") ?>"> Update</a>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>