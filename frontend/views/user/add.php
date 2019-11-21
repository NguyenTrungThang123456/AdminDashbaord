<script language="JavaScript" type="text/javascript">
    function checkAdd() {
        return confirm ("Bạn Có Chắc Muốn Thêm User Mới");
    }
</script>

<div class="form-container" style="border: 1.6px solid black;padding: 15px;  ">
    <h2>Add a user</h2>

    <form action="<?php echo base_url('user/store') ?>" method="post" enctype="multipart/form-data" style="margin-left: 30px;">
        <form>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="Name">Name user</label>
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Name">
                    <?php echo $errors['name_err'] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address">
                    <?php echo $errors['address_err'] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone_number" placeholder="Phone Number">
                    <?php echo $errors['phone_err'] ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    <?php echo $errors['email']; ?>
                    <?php echo $errors['email_err'] ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <?php echo $errors['password_err'] ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary bt1" onclick="return checkAdd()">Submit</button>
        </form>
    </form>