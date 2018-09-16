<?php

$router->post('name','Controllers/add-name.php');
$router->get('','Controllers/index.php');
$router->get('about','Controllers/about.php');
$router->get('about/culture','Controllers/about-culture.php');
$router->get('contact','Controllers/contact.php');