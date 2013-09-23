<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 9/23/13
 * Time: 9:30 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Cars;

/**
 * Тип автомобиля Автобус
 * Class CarTypePassenger
 * @package Cars
 */
class CarTypeBus extends CarTypes {

    function __construct()
    {
        $this->name = self::CAR_BUS;
    }

    public function setCountWheel($count_wheel){
        $this->count_wheel = $count_wheel;
    }

    public function setCapacity($capacity){
        parent::setCapacity($capacity);
        $this->capacity = $this->capacity." мест";
    }
}