<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 9/23/13
 * Time: 2:26 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Cars;

use Cars\Car;

class Lada extends Car{

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

    public function setType($type)
    {
        $this->type = $type;
    }

}