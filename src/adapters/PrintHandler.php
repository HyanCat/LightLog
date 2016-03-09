<?php

namespace HyanCat\LightLog\Adapters;

use HyanCat\LightLog\LogAdapter;

class PrintHandler implements LogAdapter
{

    public function open()
    {

    }

    public function close()
    {

    }

    public function write($app, $level, $message = '', $context = [])
    {
        print(implode(" ", ["[$app]", "[$level]", $message, json_encode($context)]) . PHP_EOL);
    }
}
