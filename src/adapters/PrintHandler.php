<?php

namespace HyanCat\LightLog\Adapters;

use HyanCat\LightLog\LogAdapter;

class PrintHandler implements LogAdapter
{

    public function open()
    {
        // nothing to do.
    }

    public function close()
    {
        // nothing to do.
    }

    public function write($app, $level, $message = '', $context = null)
    {
        $data = implode(" ", ["[$app]", "[$level]", $message, json_encode($context)]) . PHP_EOL;
        print($data);
    }
}
