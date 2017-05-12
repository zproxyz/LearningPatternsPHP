<?php

/**
 * Factory Pattern
 */

class DatabaseConfig
{
    private $timeout;

    public function __construct()
    {
        $this->timeout = 20;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }
}

class JsonConfig
{
    private $timeout;

    public function __construct()
    {
        $this->timeout = 20;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }
}

class ConfigFactory
{
    public static function create(string $type)
    {
        if ($type === 'json') {
            return new JsonConfig();
        }

        return new DatabaseConfig();
    }
}

$config = ConfigFactory::create('json');

