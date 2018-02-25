<?php

namespace Whosonfirst\Utils;

abstract class TaskRunner {
    protected $config;
    protected $debug = false;

    public function __construct($config) {
        $this->config = $config;
    }

    abstract public function run();

    protected function log($message) {
        echo "$message" . PHP_EOL;
    }

    protected function log_debug($message) {
        if ($this->debug) {
            echo "$message" . PHP_EOL;
        }
    }
}

?>
