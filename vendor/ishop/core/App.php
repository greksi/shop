<?php

namespace ishop;

class App
{
    public static $app;

    public function __construct() {
        
       $query = trim($_SERVER['QUERY_STRING'], '/');

       self::$app = Registry::instance();
       $this->getParams();
       new ErrorHandler();
       Router::dispatch($query);
       echo 'Отработал конструктор класса APP';
    }

    protected function getParams () {
        $params = require_once CONF . '/params.php';
        if (!empty($params)) {
            foreach($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }

}
