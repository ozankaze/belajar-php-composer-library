<?php

namespace Programmerzamannow\BelajarPhpComposerHello;

class Customer
{
    public function __construct(private string $name)
    {   
        $this->$name = $name;
    }

    public function sayHello(string $name)
    {
        echo "Hello $name, My name is $this->name" . PHP_EOL;
    }
}