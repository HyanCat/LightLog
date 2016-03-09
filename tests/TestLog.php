<?php

require '../vendor/autoload.php';

// Namespace
use HyanCat\LightLog\Adapters\PrintHandler as PrintHandler;
use HyanCat\LightLog\LightLog as LLog;

// Instance
$llog = new LLog(new PrintHandler());
$llog->app('TestApp');

// Write log
$llog->info("it's ok!");

$anArray = ['a' => 'b', 'c' => 'd'];
$llog->debug("dump array value", $anArray);

// Or notice, warning, error...
