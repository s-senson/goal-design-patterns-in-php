<?php

class Singleton 
{
    var $redis;
    
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new Singleton();
        }

        return $instance;
    }

    public function __construct()
    {
        $this->redis = new Redis();
        $this->redis->connect('127.0.0.1', 6379);
    }

 
    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

}
