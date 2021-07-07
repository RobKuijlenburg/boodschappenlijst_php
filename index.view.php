<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 7 - Boodschappenlijst</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr class='header'>
            <td>Product</td>
            <td>Prijs</td>
            <td>Aantal</td>
            <td>Subtotaal</td>
        </tr>

        <?php foreach ($products as $product) : ?>

        <tr>
            <td><?= $product["naam"]; ?></td>
            <td class='productPrice'><?= $product["prijs"]; ?></td>
            <td class='quantityChange'>
                <button class="sub">-</button>
                    <span class='productQuantity'><?=$product["aantal"];?></span>
                <button class="add">+</button>
            </td>
            <td class='productTotalCost'><?=$product["aantal"] * $product["prijs"];?></td>
        </tr>

        <?php endforeach; ?>

        <tr>
            <td class='totaal' colspan=3>Totaal</td>
            <td class='totalCost'><?=$total;?></td>
        </tr>

    </table>
    <script src="scripts.js"></script>
</body>
</html>