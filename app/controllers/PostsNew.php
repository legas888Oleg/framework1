<?php

class PostsNew {
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