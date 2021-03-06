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
use Cars\CarTypes;
use Cars\CarTypePassenger;

/**
 * Автомобиль BMW
 * Class Bmw
 * @package Cars
 */
class Bmw extends Car {

    public $count_doors;

    function __construct($name, $number, $color, $age)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
        $this->age = $age;
        $this->type = new CarTypePassenger();
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

    /**
     * @param mixed $count_doors
     */
    public function setCountDoors($count_doors)
    {
        $this->count_doors = $count_doors;
    }

    /**
     * @return mixed
     */
    public function getCountDoors()
    {
        return $this->count_doors;
    }

}