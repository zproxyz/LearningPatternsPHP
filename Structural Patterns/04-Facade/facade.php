<?php
/**
 * Facade Pattern
 */

// checking the inventory
// user pays
// ship the item


class Inventory {
    public function checkInventory(string $itemId){
        echo "checking the Inventory for item: {$itemId}".PHP_EOL;

        return true;
    }
}

class PaymentGateway {
    public function pay(float $amount)
    {
        echo "Paying for item with {$amount}".PHP_EOL;

        return true;
    }
}

class ShippingService{
    public function shipItem(string $itemId)
    {
        echo "Shipping item: {$itemId}".PHP_EOL;
    }
}

// facade
class Order{
    private $inventory;
    private $payments;
    private $shipping;

    public function __construct()
    {
        $this->inventory = new Inventory();
        $this->payments = new PaymentGateway();
        $this->shipping = new ShippingService();
    }

    public function placeOrder(string $itemId, float $amout)
    {
        if ($this->inventory->checkInventory($itemId) &&
        $this->payments->pay($amout)){
            $this->shipping->shipItem($itemId);
        }
    }
}

$order = new Order();
$order->placeOrder('12345', 150.5);