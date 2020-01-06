<?php

namespace app\controllers;

use app\models\Main;
use vendor\core\base\Controller;

class MainController extends AppController {
//    public $layout = 'main';

    public function indexAction() {
        $model = new Main;
        $posts = $model->findAll();
//        $postOne = $model->findOne('Пост 5', 'title');
//        $data = $model->findBySQL("SELECT * FROM posts ORDER BY id DESC LIMIT 2");
//        $data = $model->findBySQL("SELECT * FROM {$model->table} WHERE title LIKE ?", ['%2%']);
//        $data = $model->findLike('2', 'title');

//        debug($data);

        $title = 'PAGE TITLE';
        $this->set(compact('title', 'posts'));
    }
}