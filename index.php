<?php


require 'functions.php';
require 'groceries.php';


// $products = [
//     ["naam" => "Brood", "aantal" => 1, "prijs" => 1.00],
//     ["naam" => "Brocolli", "aantal" => 1, "prijs" => 0.99],
//     ["naam" => "Krentenbol", "aantal" => 1, "prijs" => 1.20],
//     ["naam" => "Noten", "aantal" => 1, "prijs" => 2.99]
// ];

// $sum = 0;
// $total = 0;

// for ($i = 0 ; $i < count($products) ; $i++){
//     $sum += $products[$i]["aantal"] * $products[$i]["prijs"];
// };

// for ($a = 0 ; $a < count($products) ; $a++){
//     $total = 0 + $sum;
// };

$pdo = connectToDb();

$groceries = fetchAllGroceries($pdo);

// dd($groceries);
require 'index.view.php';