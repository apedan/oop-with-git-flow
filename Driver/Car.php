<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 9/24/13
 * Time: 6:39 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Driver;

use Cars\Car as Cars;
use Cars\CarTypes;

/**
 * Автомобиль водителя
 * Class Car
 * @package Driver
 */
class Car extends Cars{

    function __construct($name, $number, $color, $age, $type)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
        $this->age = $age;
        $this->type = $type;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setType(CarTypes $type)
    {
        $this->type = $type;
    }
}