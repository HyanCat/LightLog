<?php

require '../vendor/autoload.php';

$fileName = 'temp_storage/test.log';

$llog = new HyanCat\LightLog\LightLog(new HyanCat\LightLog\Adapters\FileHandler($fileName));

assert($llog instanceof HyanCat\LightLog\LightLog);

$llog->app('LogTestingApp');

$llog->info('hello');
$llog->debug('world', ['a' => 'b', 'c' => 'd']);

assert(file_exists($fileName));
