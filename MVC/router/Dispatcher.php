<?php

class Dispatcher{
    private $route;
    public function route(){
       $uri = $_SERVER['REQUEST_URI'];
       $this -> route = new  Route($uri);
    }

    public function dispatch(){
        $this->route();

        $controllerName = ucfirst($this->route->controler) . 'Controllers';

    }
}