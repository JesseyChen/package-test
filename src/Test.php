<?php

namespace JesseyChen\PackageTest;

class Test
{

    public function execute()
    {
        echo 'This is a test..';
    }

    public function getConfig()
    {
        var_dump(config('test'));
    }
}