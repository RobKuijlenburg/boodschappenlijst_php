<?php

$groceries = $app['database']->selectAll('groceries', 'Grocery');

// dd($groceries);
require 'Core/functions.php';
require 'views/index.view.php';