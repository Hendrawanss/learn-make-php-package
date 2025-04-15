<?php

namespace Bartelsi\TestPackage;

class Human
{
    public function head(): string
    {
        return 'This is head!';
    }

    public function body(): string
    {
        return 'This is body!';
    }
    
    public function hand(): string
    {
        return 'This is hand!';
    }

    public function leg(): string
    {
        return 'This is leg!';
    }
}