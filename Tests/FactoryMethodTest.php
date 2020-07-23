<?php

namespace Tests;


use Creational\FactoryMethod\BENZBrand;
use Creational\FactoryMethod\BenzBrandFactory;
use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanBuildBMWBrand() {
        $brandFactory = new BMWBrandFactory();
        $MyBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf( BMWBrand::class, $MyBrand);
    }

    public function testCanBuildBENZBrand() {
        $brandFactory = new BenzBrandFactory();
        $MyBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf( BENZBrand::class, $MyBrand);
    }

}