<?php

$query = require 'Core/bootstrap.php';
require 'Core/groceries.php';


$groceries = $query->selectAll('groceries', 'Grocery');

 
// dd($groceries);
require 'Core/functions.php';
require 'views/index.view.php';