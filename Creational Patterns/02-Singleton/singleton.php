<?php

/**
 * Singleton Pattern
 */

final class ProductDb
{
    private $db = null;
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new ProductDb();
        }
        return self::$instance;

    }

    private function __construct()
    {
        // set $db
    }

    public function setQuery(string $sql)
    {
        echo "Setting Query: " . $sql . PHP_EOL;
    }

}

$db1 = ProductDb::getInstance();
$db2 = ProductDb::getInstance();

$db1->setQuery('SELECT * FROM ProductTypes');
echo $db1 === $db2;