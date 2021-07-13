<?php


$config = require 'config.php';

require_once 'Core/database/Router.php';

require_once 'Core/database/Connection.php';

require_once 'Core/database/QueryBuilder.php';


return new QueryBuilder(

    Connection::make($config['database'])

);