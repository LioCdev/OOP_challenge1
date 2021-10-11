<?php

class Car 
{

    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): string {
        $this->currentSpeed = 0;
        return "Let's Go ! ";
    }

    public function forward(): string {
        $sentence = "";
        while ($this->currentSpeed < 10) {
            $this->currentSpeed++;
            $sentence .= "Come On ! ";
        }
        $sentence .= "Slowly Baby ! ";
        return $sentence;
    }

    public function brake():string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped ! ";
        return $sentence;
    }

    public function getNbWheels():int {
        return $this->nbWheels;
    }

    public function getCurrentSpeed():string {
        return "Speed is " . $this->currentSpeed ." km/h." . PHP_EOL;
    }

    public function getColor():string {
        return $this->Color;
    }

    public function getNbSeats():int {
        return $this->nbSeats;
    }

    public function getEnergy():string {
        return $this->energy;
    }

    public function getEnergyLevel():int {
        return $this->energyLevel;
    }

}