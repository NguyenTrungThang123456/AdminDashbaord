<div class="form-container">
    <h2>Add a partner</h2>

    <form action="<?php echo base_url('partner/store') ?>" method="post" enctype="multipart/form-data">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Name">Name Partner</label>
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Name" required>
                    
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <?php echo $errors['email_err']?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address" required>
                    
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone_number" required placeholder="Phone Number">
                    <?php echo $errors['phone_err']?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputArea">Area</label>
                    <select id="inputArea" class="form-control" name="area" required>
                        <option selected>Chọn khu vực...</option>
                        <option>Nội Thành</option>
                        <option>Ngoại Thành</option>
                    </select>
                    <?php echo $errors['area_err']?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary bt1" style="margin-left: 148px;">Submit</button>
        </form>
    </form>