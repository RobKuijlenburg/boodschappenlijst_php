<?php require('partials/head.php'); ?>

    <table>
        <tr class='header'>
            <td>Product</td>
            <td>Prijs</td>
            <td>Aantal</td>
            <td>Subtotaal</td>
        </tr>

        <?php foreach ($groceries as $groceries) : ?>

        <tr>
            <td><?= $groceries->name; ?></td>
            <td class='productPrice'><?= $groceries->price; ?></td>
            <td class='quantityChange'>
                <button class="sub">-</button>
                <span class='productQuantity'><?=$groceries->number;?></span>
                <button class="add">+</button>
            </td>
            <td class='productTotalCost'><?=$groceries->price * $groceries->number;?></td>
        </tr>

        <?php endforeach; ?>


        <tr>
            <td class='totaal' colspan=3>Totaal</td>
            <td class='totalCost'><?= $total ?></td>
        </tr>

    </table>
<?php require('partials/footer.php'); ?>