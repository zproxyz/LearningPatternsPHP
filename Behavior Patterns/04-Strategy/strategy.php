<?php

/**
 * Strategy Pattern
 */
interface INameListSerializer
{
    function output(NameList $nameList);
}

class NameList
{
    public $names;

    public function __construct(array $names)
    {
        $this->names = $names;
    }

//    public function toString(INameListSerializer $serializer)
//    {
//        return $serializer->output($this);
//    }
}

class JsonNameListSerializer implements INameListSerializer
{
    public function output(NameList $nameList)
    {
        return json_encode($nameList->names);
    }
}

class CsvNameListSerializer implements INameListSerializer
{
    public function output(NameList $nameList)
    {
        return implode(',', $nameList->names);
    }
}

$names = new NameList(['Jeremy', 'Jason', 'Jeffrey', 'Jennifer']);

//echo $names->toString(new CsvNameListSerializer());

$csvSerializer = new CsvNameListSerializer();
echo $csvSerializer->output($names);