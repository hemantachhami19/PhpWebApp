<?php
require 'Task.php';
require 'core/bootstrap.php';
$tasks = $app['database']->selectAll('todo','Task');
require "views/index.view.php";




