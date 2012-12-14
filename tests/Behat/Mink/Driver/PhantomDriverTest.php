<?php

namespace Behat\Mink\Driver;

use Behat\Mink\Driver\PhantomDriver;

class PhantomDriverTest extends \PHPUnit_Framework_TestCase
{
    public function testStartsServer()
    {
        $driver = new PhantomDriver();
        $driver->start();

        $this->assertTrue($driver->isStarted());
    }
}
