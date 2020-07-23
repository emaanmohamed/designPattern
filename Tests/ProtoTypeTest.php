<?php

namespace Tests;

use Creational\ProtoType\automaticCarProtoType;
use Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase
{
    public function testCanCreateAutomaticCarWithClone()
    {
        $automaticProtoTypeCar = new AutomaticCarProtoType();
        for ($index = 1; $index <= 10 ; $index ++) {
            $newCar = clone $automaticProtoTypeCar;
            $this->assertInstanceOf(AutomaticCarProtoType::class, $newCar);
        }
    }

    public function testCanCreateManualCarWithClone()
    {
        $manualProtoTypeCar = new ManualCarProtoType();
        for ($index = 1; $index <= 10 ; $index ++) {
            $newCar = clone $manualProtoTypeCar;
            $this->assertInstanceOf(ManualCarProtoType::class, $newCar);
        }
    }


}