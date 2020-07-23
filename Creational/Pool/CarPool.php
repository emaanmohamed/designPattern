<?php


namespace Creational\Pool;


class CarPool
{
    /**
     * @var Car []
     */
    private $freeCars = [];
    private $busyCars = [];

    public function rentCar()
    {
        if (count($this->freeCars) == 0)
        {
            $car = new Car();
        }
        else
        {
            $car = array_pop($this->freeCars);
        }
        $this->busyCars[spl_object_hash($car)] = $car;
        return $car;
    }

//هنا خلاص هرجع العربيه الاجانس تاني

    public function freeCar(Car $car)
    {
        $carID = spl_object_hash($car);
        if (isset($this->busyCars[$carID])) {
            unset($this->busyCars[$carID]);
            $this->freeCars[$carID] = $car;
        }

    }

    public function getReport() :int
    {
        return count($this->freeCars) + count($this->busyCars);
    }

    public function getFreeCount() {
        return count($this->freeCars);
    }

}