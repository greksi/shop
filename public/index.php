<?php
    error_reporting(E_ALL);


    require_once dirname(__DIR__) . '/config/init.php';
    require_once LIBS . '/functions.php';
    require_once CONF . '/routes.php';
     session_start();

    debug(\ishop\Router::getRoutes());
  echo 'Загрузили файлы init.php, function.php, routes.php';




$myApp = new \ishop\App();
debug($myApp::$app->getProperties());
