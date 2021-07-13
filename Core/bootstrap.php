<?php

$app = [];

$app['config'] = require 'config.php';

require 'Core/database/Router.php';

require 'core/Request.php';

require 'Core/database/Connection.php';

require 'Core/database/QueryBuilder.php';

require 'Core/database/groceries.php';


$app['database'] = new QueryBuilder(

    Connection::make($app['config']['database'])

);