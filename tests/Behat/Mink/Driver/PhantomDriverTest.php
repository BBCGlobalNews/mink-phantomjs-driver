<?php

namespace Tests\Behat\Mink\Driver;

use Behat\Mink\Driver\PhantomDriver;


class PhantomDriverTest extends JavascriptDriverTest
{
    protected static function getDriver()
    {
       return new PhantomDriver();
    }
}