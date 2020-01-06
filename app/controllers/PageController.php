<?php

namespace app\controllers;

use vendor\core\base\Controller;

class PageController extends AppController {
    public function viewAction() {
        debug($this->route);
        debug($_GET);
        echo $_GET['page'];
        echo 'Page::viewAction';
    }
}