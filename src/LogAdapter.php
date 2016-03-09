<?php

namespace HyanCat\LightLog;

interface LogAdapter
{
    public function open();

    public function close();

    public function write($app, $level, $message = '', $context = []);
}
