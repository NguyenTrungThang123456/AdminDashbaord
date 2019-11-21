<script language="JavaScript" type="text/javascript">
    function checkUpdate() {
        return confirm ("Bạn Có Chắc Muốn Cập Nhật Lại Thông Tin User Này");
    }
</script>

<div class="form-container">
    <h2>Update a user</h2>
    <form action="<?php echo base_url("user/update&id={$user['id']}") ?>" method="post" enctype="multipart/form-data">
        <form>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="Name">Name user</label>
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Name" value="<?php echo $user['name'] ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address" value="<?php echo $user['address'] ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone_number" placeholder="Phone Number" value="<?php echo $user['phone_number'] ?>">
                </div>
            </div>
            
    
            <button type="submit" class="btn btn-primary bt2" onclick="return checkUpdate()">Submit</button>
        </form>
    </form>