<?php
// This is my CONTROLLER for hello project

// Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an instance of the base class
$f3 = Base::instance(); // if Java , Base f3 = new Base();

// Define default route ("home page fo MVC project")
$f3->route('GET /', function() {
    echo '<h1>Hello, Fat Free!</h1>';
});

//Run Fat-Free
$f3->run(); // if Java, f3.run();

