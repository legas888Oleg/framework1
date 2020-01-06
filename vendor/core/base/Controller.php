<?php

namespace vendor\core\base;

abstract class Controller {
    public $route = [];

    /**
     * текущий вид
     * @var string
     */
    public $view;

    /**
     * текущий шаблон
     * @var string
     */
    public $layout;

    /**
     * пользовательские данные
     * @var array
     */
    public $vars = [];

    public function __construct($route) {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView(){
        $viewObject = new View($this->route, $this->layout, $this->view);
        $viewObject->render($this->vars);
    }

    /**
     * заполняет массив переданными пользоватеьскими данными
     * @param mixed $vars
     */
    public function set($vars) {
        $this->vars = $vars;
    }
}