<?php

namespace app\controllers;

use app\models\Main;
use vendor\core\base\Controller;

class MainController extends AppController {
//    public $layout = 'main';

    public function indexAction() {
        $model = new Main;
        $posts = $model->findAll();

        $title = 'PAGE TITLE';
        $this->set(compact('title', 'posts'));
    }
}