<a href="<?php echo base_url('order/index') ?>" class="btn btn-success"><i class="fa fa-backward"></i> Back</a>
<div class="card card-body bg-light mt-5">
    <h3>Update Order</h3>
    <p>Update a order</p>
    <form action="<?php echo base_url('order/update') ?>" method="post">
        <div class="form-group">
            <label for="status">Status <span class="red">*</span></label>
            <select name="" id="status" class="form-control">
                <option value="">Chưa xử lí</option>
                <option value="">Đã xử lí</option>
            </select>
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