<?php
use PHPUnit\Framework\TestCase;
use FaradTech\Port443Monitor\ConnectionCounter;

class ConnectionTest extends TestCase
{

    public function testCountIsInteger(): void
    {

        $count = (new ConnectionCounter())->count();

        $this->assertIsInt($count);

    }

}