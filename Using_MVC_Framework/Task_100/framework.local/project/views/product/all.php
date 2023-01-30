<h1><?= $header ?></h1>
<table>
    <tr>
        <td><b>Название</b></td>
        <td><b>Цена</b></td>
        <td><b>Количество</b></td>
        <td><b>Категория</b></td>
    </tr>
    <?php
    foreach ($products as $product) { ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['quantity'] ?></td>
            <td><?= $product['category'] ?></td>
        </tr>
    <?php }
    ?>
</table>
