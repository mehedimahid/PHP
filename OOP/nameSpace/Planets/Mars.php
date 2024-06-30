<?php
namespace Astronomy\Planets;
use \Another\Planet_Mars;
class Mars extends Planet_Mars
{
    function getName()
    {
        echo "Mars\n";
        parent::getName();
    }
}