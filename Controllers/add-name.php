<?php
require 'core/bootstrap.php';
$app['database']->insert('users', [
  'name'=>$_POST['name']
]);
//$sql ='insert into %s(%s)values(%s),';