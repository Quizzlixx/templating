<?php
/**
 * Kerrie Low
 * 1.27.20
 * Full Stack Software Development
 *
 */
// start session
session_start();

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// instantiate F3
// :: means static method
$f3 = Base::instance();

// define a default route
// -> calls an instance method
$f3->route('GET /', function() {
    echo "<h1>Hello World!</h1>";
//    $view = new Template();
//    echo $view->render('views/home.html');
});

// run f3
$f3->run();