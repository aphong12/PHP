<?php

class Route{
    private $controller;
    private $action;
    private $params;

    //magic meth
    public function __get($var){
        if(isset($this->{$var})){
            return $this->{$var};
        }
        return null;
    }
    function __construct($uri)
    {
        if($uri=='/'){
            $this->controller = 'task';
            $this->action = 'index';
            $param = [];

            return 0;
        }
        $this -> parse($uri);
    }
    public function parse(){
       
    }
}