<?php require('partials/head.php'); ?>

    <h1>Boodschappen</h1>
    <form action="/add_groceries.php" method="POST">
        <label for="naam">Naam</label>
        <input type="text" name="naam" id="naam">
        <label for="aantal">Aantal</label>
        <input type="text" name="aantal" id="aantal">
        <label for="prijs">Prijs</label>
        <input type="text" name="prijs" id="prijs">
        <button type="submit">Submit</button>
    </form>
<?php require('partials/footer.php'); ?>