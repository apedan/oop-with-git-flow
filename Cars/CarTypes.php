<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 9/23/13
 * Time: 9:30 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Cars;


abstract class CarTypes {

    const CAR_TRUCK = "Грузовой автомобиль";
    const CAR_PASSENGER = "Легковой автомобиль";
    const CAR_BUS = "Автобус автомобиль";

    public $name;
    public $count_wheel;
    public $capacity;

    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }

    abstract public function setCountWheel($count_wheel);

}