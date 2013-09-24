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
use Cars\CarTypeTruck;

/**
 * Автомобил ЗИЛ
 * Class Zil
 * @package Cars
 */
class Zil extends Car {

    public $is_tipper;

    function __construct($name, $number, $color, $age)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
        $this->age = $age;
        $this->type = new CarTypeTruck();
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
     * @param Boolean $is_tipper
     */
    public function setIsTipper($is_tipper)
    {
        $this->is_tipper = $is_tipper;
    }

    /**
     * @return mixed
     */
    public function getIsTipper()
    {
        return $this->is_tipper;
    }

}