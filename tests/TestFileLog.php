<?php

require '../vendor/autoload.php';

// Namespace
use HyanCat\LightLog\Adapters\FileHandler as LogFileHandler;
use HyanCat\LightLog\LightLog as LLog;

// Instance
$llog = new LLog(new LogFileHandler('logs/test.log'));
$llog->app('your_app_name'); // optional

// Write log
$llog->info("it's ok!");

$anArray = ['a' => 'b', 'c' => 'd'];
$llog->debug("dump array value", $anArray);

// Or notice, warning, error...
