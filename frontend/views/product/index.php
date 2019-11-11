<a href="<? echo base_url('product/add') ?>">ADD</a>
<ul>
    <?php foreach ($products as $product) : ?>
        <li>
            <?php echo $product['name'] ?> <?php echo $product['price'] ?>
            <a href="<? echo base_url("product/destroy?id={$product['id']}")?>"> Delete</a>

        </li>
    <?php endforeach; ?>
</ul>