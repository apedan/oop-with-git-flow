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
use Cars\CarTypeBus;

/**
 * Автомобиль Мерседес
 * Class Mercedes
 * @package Cars
 */
class Mercedes extends Car {

    public $is_trailer;

    function __construct($name, $number, $color, $age, $type)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
        $this->age = $age;
        $this->type = new CarTypeBus();
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
     * @param Boolean $is_trailer
     */
    public function setIsTrailer($is_trailer)
    {
        $this->is_trailer = $is_trailer;
    }

    /**
     * @return mixed
     */
    public function getIsTrailer()
    {
        return $this->is_trailer;
    }

}