<?php


$sum = 0;
$total = 0;

for ($i = 0 ; $i < count($groceries) ; $i++){
    $sum += $groceries[$i]->number * $groceries[$i]->price;
};

for ($a = 0 ; $a < count($groceries) ; $a++){
    $total = 0 + $sum;
};


function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}
