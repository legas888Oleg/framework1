<?php

namespace app\controllers;

use vendor\core\base\Controller;

class Main extends App {
//    public $layout = 'main';

    public function indexAction() {
//        $this->layout = false;
        $this->layout = 'main';
//        $this->view = 'test';
        $name = 'Андрей';
        $hi = 'Hello';
        $this->set(compact('name', 'hi'));
    }
}