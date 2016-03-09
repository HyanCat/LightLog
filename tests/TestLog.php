<?php

require '../vendor/autoload.php';

assert(class_exists(HyanCat\LightLog\LightLog::class));

$llog = new HyanCat\LightLog\LightLog(new HyanCat\LightLog\Adapters\PrintHandler());

assert($llog instanceof HyanCat\LightLog\LightLog);

$llog->app('LogTestingApp');

$llog->info('hello');
$llog->debug('world', ['a' => 'b', 'c' => 'd']);
