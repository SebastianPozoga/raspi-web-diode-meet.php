<?php

define('APP_MODE', 'development');

require 'raspi/Diode.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim(array(
    'debug' => TRUE,
    'mode' => 'development'
        ));

$app->get('/', function () {
    require 'main.php';
});

$app->post('/api/diode/on', function () {
    $diode = new Diode();
    $diode->on();
});

$app->post('/api/diode/off', function () {
    $diode = new Diode();
    $diode->off();
});

$app->post('/api/diode/flashing', function () {
    $diode = new Diode();
    $diode->flashing();
});

$app->run();
