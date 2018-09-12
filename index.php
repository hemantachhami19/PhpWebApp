<?php
require 'core/Router.php';
$database = require 'core/bootstrap.php';
$router =new Router;
require 'routes.php';
$uri =$_SERVER['REQUEST_URI'];

$router->register($routes);
require $router->direct($uri);
