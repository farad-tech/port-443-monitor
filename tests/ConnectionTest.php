<?php
use PHPUnit\Framework\TestCase;
use Src\ConnectionCounter;

class ConnectionTest extends TestCase
{

    public function testCountIsInteger(): void
    {

        $count = (new ConnectionCounter())->count();

        $this->assertIsInt($count);

    }

}