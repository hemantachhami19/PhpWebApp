<?php
require 'core/Router.php';
$router =new Router;
require 'routes.php';
$uri =$_SERVER['REQUEST_URI'];
$router->register($routes);
require $router->direct($uri);
