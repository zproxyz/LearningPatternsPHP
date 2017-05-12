<?php

/**
 *  Adapter Pattern
 */
interface PaymentAdapter
{
    function pay($amount);
}

class FooPay
{
    public function makePayment($amount)
    {
        echo "FooPay: " . $amount . PHP_EOL;
    }
}

class BarPayments
{
    public function releaseFunds($amount)
    {
        echo "BarPayments: " . $amount . PHP_EOL;
    }
}

class FooPayAdapter implements PaymentAdapter
{
    private $fooPay;

    public function __construct(FooPay $fooPay)
    {
        $this->fooPay = $fooPay;
    }

    function pay($amount)
    {
        $this->fooPay->makePayment($amount);
    }
}

class BarPaymentAdapter implements PaymentAdapter
{
    private $barPayments;

    public function __construct(BarPayments $barPayments)
    {
        $this->barPayments = $barPayments;
    }

    function pay($amount)
    {
        $this->barPayments->releaseFunds($amount);
    }
}

$gateway = new FooPayAdapter(new FooPay());
$gateway->pay(100);

$gateway = new BarPaymentAdapter(new BarPayments());
$gateway->pay(100);