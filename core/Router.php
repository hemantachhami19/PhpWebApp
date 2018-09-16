<?php

Class Router{

    public $routes=[
        'GET' =>[],
        'POST' =>[],
    ];
    public function register($routes)
    {
        $this->routes=$routes;
    }

    public function direct($uri,$requestType)
    {
        if(array_key_exists($uri ,$this->routes[$requestType])){
            return $this->routes[$requestType][$uri];
        }
        throw new Exception("no routes defined");
    }

    public static function load($file)
    {
        $router = new self;
        require $file;
        return $router;
    }

    public function get($uri,$controller)
    {
        $this->routes['GET'][$uri]=$controller;
    }

    public function post($uri,$controller)
    {
        $this->routes['POST'][$uri]=$controller;
    }
}