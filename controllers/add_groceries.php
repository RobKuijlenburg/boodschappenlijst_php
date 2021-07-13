<?php

$app['database']->insert('groceries', [
    'name' => $_POST['naam'],
    'number' => $_POST['aantal'],
    'price' => $_POST['prijs']
]);

header('Location: /groceries');