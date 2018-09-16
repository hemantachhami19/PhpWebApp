<?php
require 'functions.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
$config = require 'config.php';
$app['database']= new QueryBuilder(Connection::make($config['database']));
