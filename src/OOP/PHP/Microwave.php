<?php

class Microwave
{
    private $temp;
    private $program;
    private $time;

    public function __construct($temp, $program, $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    public function deFreeze(): string
    {
        $this->turnOnMicrowaveHeatingSystem();
        $this->loadingDefreezingProgram();
        $this->setTime();
        return "um defreezing the food at {$this->time} using the program";
    }

    private function turnOnMicrowaveHeatingSystem()
    {
        return "Starting on Heating System";
    }

    private function loadingDefreezingProgram()
    {
        return "Loading program {$this->program}";
    }

    private function setTime()
    {
        return "setting defreezzing time to {$this->time} seconds";
    }


}