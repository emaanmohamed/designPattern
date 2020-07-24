<?php


namespace Creational\StaticFactory;


class StaticFactory
{
    public static function factory(string $type)
    {
        if ($type === 'BMW')
        {
            return new BMWCar();
        }
        elseif ($type === 'BENZ')
        {
            return new BENZCar();
        }
        return null;


    }

}