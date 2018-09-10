<?php

try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos','root','');
    $statement =$pdo->prepare('select * from todo');
    $statement->execute();
    $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
}catch (PDOException $e){
    die('couldnot connect');
}
require "index.view.php";




