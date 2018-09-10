<?php
/**
 * Created by PhpStorm.
 * User: alight
 * Date: 9/10/18
 * Time: 7:33 AM
 */

class Connection
{
    public static function make()
    {
        try{
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos','root','');
            return $pdo;

        }catch (PDOException $e){
            die('couldnot connect');
        }
    }
}