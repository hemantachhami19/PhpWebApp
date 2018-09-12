<?php

class Connection
{
    public static function make($config)
    {

        try{
            $pdo = new PDO(
                $config['connection'].
                ';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
            return $pdo;

        }catch (PDOException $e){
            die('couldnot connect');
        }
    }
}