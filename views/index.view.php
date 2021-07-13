<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boodschappenlijst</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php require('partials/nav.php'); ?>


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
    <script src="scripts.js"></script>
</body>

</html>