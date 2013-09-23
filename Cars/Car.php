<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 9/23/13
 * Time: 2:19 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Cars;


abstract class Car implements CarInterface{
    public $name;
    public $number;
    public $color;
    public $age;
    public $type;

    public function getAge()
    {
        return $this->age;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getType()
    {
        return $this->type;
    }

}