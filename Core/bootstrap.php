<?php


$config = require 'config.php';

require 'Core/database/Router.php';

require 'Core/database/Connection.php';

require 'Core/database/QueryBuilder.php';






return new QueryBuilder(

    Connection::make($config['database'])

);