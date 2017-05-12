<?php
/**
 * Date: 13.05.2017
 * Time: 0:46
 */
require_once 'vendor/autoload.php';
use Acme\BookInterface;
use Acme\eReaderAdapter;
use Acme\Kindle;
use Acme\Nook;

class Person{
    /**
     * @param BookInterface $book
     */
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person())->read(new eReaderAdapter(new Nook()));