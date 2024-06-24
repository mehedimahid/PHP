<?php
class MotorCycle
{
    public $parameters;

    function __construct($displacement, $capacity, $mileage)
    {
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    function __get($name)
    {
        echo $this->parameters[$name];
    }

    function __set($name, $value)
    {
        $this->parameters[$name] = $value;
    }
}
$pulser = new MotorCycle("150cc", "15Ltr","40kmpl");
$pulser->parameters['displacement'] = "150cc";
$pulser->parameters['capacity'] = "40kmpl";
$pulser->parameters['mileage'] = "40kmpl";
$pulser->displacement;
$pulser->mileage;

