<?php

$router->get('groceries', 'controllers/index.php');

$router->get('groceries/create', 'controllers/create.php');

$router->post('groceries/add', 'controllers/add_groceries.php');
