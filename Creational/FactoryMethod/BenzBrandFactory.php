<?php


namespace Creational\FactoryMethod;


class BenzBrandFactory implements BrandFactory
{
    public function BuildBrand()
    {
        // TODO: Implement BuildBrand() method.
        return new BENZBrand();
    }

}