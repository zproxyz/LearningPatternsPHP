<?php
/**
 * Date: 13.05.2017
 * Time: 0:52
 */

namespace Acme;


class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('turn the Kindle on');
    }

    public function pressNextButton()
    {
        var_dump('press the next button on the Kindle');
    }
}