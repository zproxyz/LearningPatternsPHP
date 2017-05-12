<?php
/**
 * Date: 13.05.2017
 * Time: 1:03
 */

namespace Acme;


class Nook implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('turn the Nook on');
    }

    public function pressNextButton()
    {
        var_dump('press the next button on the Nook');
    }
}