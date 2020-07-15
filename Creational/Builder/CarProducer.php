<?php


namespace Creational\Builder;


class CarProducer
{
    private $Builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->Builder = $builder;
    }

    public function ProduceCar() {
         $this->Builder->createCar();
         $this->Builder->addBody();
         $this->Builder->addDoors();
         $this->Builder->addEngine();
         return $this->Builder->getCar();
    }

}