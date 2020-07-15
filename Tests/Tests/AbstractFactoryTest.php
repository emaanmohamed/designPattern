<?php


namespace Tests;


use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBMWCare()
    {
        $careFactory = new CarAbstractFactory(200000);
        $myCar = $careFactory->createBMWCare();

        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

}