<?php
/**
 * Observer Pattern
 */

// observable
// observer

interface IShoppingCartObserver
{
    function itemAdded(int $id);
}

class ShoppingCart
{

    private $observers = [];

    public function addItem(int $id)
    {
        // have the code adding item
        $this->notify($id);
    }

    private function notify(int $id)
    {
        foreach ($this->observers as $observer) {
            $observer->itemAdded($id);
        }
    }

    public function attach(IShoppingCartObserver $observer)
    {
        $this->observers[] = $observer;
    }
}

class ShoppingCartLog implements IShoppingCartObserver
{
    public function itemAdded(int $id)
    {
        echo "Logged item {$id}" . PHP_EOL;
    }
}

$cart = new ShoppingCart();
$logger = new ShoppingCartLog();

$cart->attach($logger);

$cart->addItem(1);
$cart->addItem(123);
$cart->addItem(12345);