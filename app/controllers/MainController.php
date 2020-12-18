<?php

namespace app\controllers;

use app\controllers\AppController;
use ishop\Cache;

class MainController extends AppController {
   
   
    public function indexAction () {
        $this->setMeta("MainPage", "Description for Main Page...", "keywords...");

    }
}