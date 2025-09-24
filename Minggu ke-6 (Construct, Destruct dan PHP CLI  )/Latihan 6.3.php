<?php

class Suhu
{
    private $celcius;

    public function __construct($celcius)
    {
        $this->celcius = $celcius;
    }

    public function getCelcius()
    {
        return $this->celcius;
    }

    public function getReamur()
    {
        return $this->celcius * 4 / 5;
    }

    public function getFahrenheit()
    {
        return ($this->celcius * 9 / 5) + 32;
    }

    public function getKelvin()
    {
        return $this->celcius + 273.15;
    }
}

// Tentukan langsung nilai celcius
$suhu = new Suhu(36);

echo "Suhu dalam Celcius = " . $suhu->getCelcius() . " derajat<br>";
echo "Suhu dalam Reamur = " . $suhu->getReamur() . " derajat<br>";
echo "Suhu dalam Fahrenheit = " . $suhu->getFahrenheit() . " derajat<br>";
echo "Suhu dalam Kelvin = " . $suhu->getKelvin() . " derajat<br>";
