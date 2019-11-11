<form action="<?php echo base_url('product/store') ?>" method="POST">
    <label for="name">name</label>
    <input type="text" name="name" id="name">
    <label for="price">price</label>
    <input type="text" id="price" name="price">

    <input type="submit" value="Create">
</form>

<?php if (!empty($errors)): ?>

<ul>
    <?php foreach($errors as $error): ?>
        <li><?php echo $error ?></li>
    <?php endforeach; ?>
</ul>

<?php endif; ?>