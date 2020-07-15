<?php


namespace Creational\Builder;


use Creational\Builder\Models\Car;
use Creational\Models\BENZCar;
use Creational\Models\BMWCar;

class BMWCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     *
     */

    private $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BMWCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('BODY', 'body');
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart('DOOR', 'BM-door');
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('WHEEL', 'BM-wheel');

    }
    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('ENGINE', 'BM-engine');
    }
    public function getCar(): Car
    {
        // TODO: Implement getCar() method.
        return $this->type;

    }


}