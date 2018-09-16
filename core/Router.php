<?php

Class Router{

    protected $routes=[];
    public function register($routes)
    {
        $this->routes=$routes;
    }

    public function direct($uri)
    {

        if(array_key_exists($uri ,$this->routes)){
            return $this->routes[$uri];
        }
        throw new Exception("no routes defined");
    }

    public static function load($file)
    {
        $router = new self;
        require $file;
        return $router;
    }
}