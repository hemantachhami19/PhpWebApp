<?php
require 'Task.php';
require 'functions.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$query =require 'bootstrap.php';
$tasks = $query->selectAll('todo','Task');
require "index.view.php";




