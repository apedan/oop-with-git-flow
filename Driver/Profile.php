<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 9/24/13
 * Time: 6:34 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Driver;

/**
 * Профайл Водителя
 * Class Profile
 * @package Driver
 */
class Profile {
    public $name;
    public $age;

    function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}