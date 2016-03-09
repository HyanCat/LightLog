<?php

namespace HyanCat\LightLog;

class LightLog
{
    const INFO    = 'INFO';
    const NOTICE  = 'NOTICE';
    const WARNING = 'WARNING';
    const ERROR   = 'ERROR';
    const DEBUG   = 'DEBUG';

    private $appName = 'App';

    protected $handler;

    public function __construct($adapter)
    {
        $this->handler = $adapter;

        $this->handler->open();
    }

    public function __destruct()
    {
        $this->handler->close();
    }

    public function app($appName)
    {
        $this->appName = $appName;
    }

    public function info($message, $context = [])
    {
        $this->log(self::INFO, $message, $context);
    }

    public function notice($message, $context = [])
    {
        $this->log(self::NOTICE, $message, $context);
    }

    public function warning($message, $context = [])
    {
        $this->log(self::WARNING, $message, $context);
    }

    public function error($message, $context = [])
    {
        $this->log(self::ERROR, $message, $context);
    }

    public function debug($message, $context = [])
    {
        $this->log(self::DEBUG, $message, $context);
    }

    public function log($level, $message, $context = [])
    {
        $debugTrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);

        if (!empty($debugTrace)) {
            $lastCaller = $debugTrace[count($debugTrace) - 1];
            $callInfo   = $lastCaller['file'] . ':' . $lastCaller['line'];
        }

        $this->handler->write($this->appName, $level, basename($callInfo) . ' - ' . $message, $context);
    }
}
