<?php

$query = require 'bootstrap.php';
require 'groceries.php';


$groceries = $query->selectAll('groceries', 'Grocery');

 
// dd($groceries);
require 'functions.php';
require 'index.view.php';