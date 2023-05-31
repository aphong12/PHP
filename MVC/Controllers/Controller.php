<?php

class Controller
{
    public function render($view, $params = [])
    {
       extract($params);
       $controller = lcfirst(str_repeat('Controller', '',get_class($this)));
       ob_start();
       require_once '../view' . $controller . '/' . $view . '.php';
       $screen = ob_get_clean();
       require_once '../view/layout/layout.php';
    }
}