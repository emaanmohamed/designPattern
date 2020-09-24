<?php


namespace Creational\SimpleFactory;


use PHPUnit\Framework\TestCase;

class simpleFactoryTest extends TestCase
{
    public function testCanCreateCar()
    {
        $factory = new CarFactory();
        $BMWCar = $factory->createCar('BMW');
        $this->assertInstanceOf(Car::class, $BMWCar);
    }

}