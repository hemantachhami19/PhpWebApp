<?php
require 'Task.php';
$query = require 'core/bootstrap.php';
$tasks = $query->selectAll('todo','Task');
require "views/index.view.php";




