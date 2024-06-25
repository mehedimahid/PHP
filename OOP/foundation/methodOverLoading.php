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

    function __isset($name)
    {
        if (!isset($this->parameters[$name])) {
            echo "{$name} Not Found!!\n";
            return false;
        } else {
            return true;
        }
    }

    function __unset($name)
    {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }

    function __call($name, $arguments)
    {
        if ($name) {
            if ($arguments) {
                echo "I am running at {$arguments[0]}\n";
            } else {
                echo "I am running\n";
            }
        }
    }
    static function __callStatic($name, $arguments)
    {
        echo "Static Call\n";
    }
}
//MotorCycle::wash();
$pulser = new MotorCycle("150cc", "15Ltr", "40kmpl");
$pulser->run();
