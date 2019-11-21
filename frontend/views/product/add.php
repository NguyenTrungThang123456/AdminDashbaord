<a href="<?php echo base_url('product/index') ?>" class="btn btn-success"><i class="fa fa-backward"></i> Back</a>
<div class="card card-body bg-light mt-5">
    <h3>Add Product</h3>
    <p>Create a new product</p>
    <form action="<?php echo base_url('product/store') ?>" method="post">
        <div class="form-group">
            <label for="name">Name <span class="red">*</span></label>
            <input type="text" name="name" class="form-control">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label for="price">Price <span class="red">*</span></label>
            <input name="price" type="number" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Image <span class="red">*</span></label>
            <input type="file" name="fileToUpload" multiple="multiple" class="form-control" >
        </div>
        <div class="form-group">
            <label for="quantity">Quantity <span class="red">*</span></label>
            <input name="quantity" type="number" class="form-control">
        </div>
        <div class="form-group">
            <label for="category">Category <span class="red">*</span></label>
            <select name="category" class="form-control">
                <option value="">VEST</option>
                <option value="">SƠ MI</option>
                <option value="">NƠ</option>
                <option value="">CARAVAT</option>
                <option value="">QUẦN ÂU</option>
                <option value="">KHĂN CÀI VEST</option>
                <option value="">GIÀY DA</option>
                <option value="">ÁO DA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="brand">Brand <span class="red">*</span></label>
            <input name="brand" type="text"class="form-control">
        </div>
        <input type="submit" class="btn btn-success" value="Submit" />
    </form>
</div>
<?php if (!empty($errors)) : ?>

    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?php echo $error ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>