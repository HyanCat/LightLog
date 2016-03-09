<?php

namespace HyanCat\LightLog\Adapters;

use HyanCat\LightLog\LogAdapter;

class FileHandler implements LogAdapter
{

    private $filePath;
    private $file;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function open()
    {
        $dir = dirname($this->filePath);
        if (!file_exists($this->filePath) && !is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        $this->file = fopen($this->filePath, 'a+');
    }

    public function close()
    {
        fclose($this->file);
    }

    public function write($app, $level, $message = '', $context = [])
    {
        $data = implode(" ", ["[$app]", "[$level]", $message, json_encode($context)]) . PHP_EOL;
        fwrite($this->file, $data);
    }
}
