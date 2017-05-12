<?php
/**
 * Date: 13.05.2017
 * Time: 0:56
 */

namespace Acme;


class eReaderAdapter implements BookInterface
{
    private $reader;

    public function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }


    public function open()
    {
        return $this->reader->turnOn();
    }

    public function turnPage()
    {
        return $this->reader->pressNextButton();
    }
}