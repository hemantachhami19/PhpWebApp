<?php
$pdo = Connection::make();
$queryBuilder =new QueryBuilder($pdo);
return $queryBuilder;