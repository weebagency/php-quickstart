<?php

$loader = require __DIR__ . '/vendor/autoload.php';

use TestApp\App;

// Test DB
/*
mysqli_connect("db", "root", "test") or die(mysqli_error());
echo "Connected to MySQL<br />";
*/

App::Bootstrap();





