<?php

namespace app\controllers;

use vendor\core\base\Controller;

class PostsNew extends App {
    public function indexAction() {
        echo 'PostsNew::indexAction';
    }

    public function testAction() {
        echo 'PostsNew::testAction';
    }

    public function testPageAction() {
        echo 'PostsNew::testPageAction';
    }

    public function before(){
        echo 'PostsNew::before';
    }
}