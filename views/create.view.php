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
    <nav>

        <ul>
            <li><a href="/groceries">Lijst</a></li>
            <li><a href="/groceries/create">Boodschappen</a></li>
        </ul>

    </nav>
    <h1>Boodschappen</h1>
    <form action="" method="post">
        <label for="naam">Naam</label>
        <input type="text" name="naam" id="naam">
        <label for="aantal">Aantal</label>
        <input type="text" name="aantal" id="aantal">
        <label for="prijs">Prijs</label>
        <input type="text" name="prijs" id="prijs">
        <button type="submit">Submit</button>
    </form>
</body>

</html>