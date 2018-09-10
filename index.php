<?php
require 'Task.php';
require 'functions.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$pdo = Connection::make();
$queryBuilder =new QueryBuilder($pdo);
$tasks = $queryBuilder->selectAll('todo');
require "index.view.php";




