<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 9/24/13
 * Time: 6:35 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Driver;

use Driver\Car;
use Driver\Profile;

/**
 * Водитель
 * Class Driver
 * @package Driver
 */
class Driver {

    public $profile;
    public $car;

    function __construct(Car $car, Profile $profile)
    {
        $this->car = $car;
        $this->profile = $profile;
    }

    public function setCar(Car $car)
    {
        $this->car = $car;
    }

    public function getCar()
    {
        return $this->car;
    }

    public function setProfile(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function getProfile()
    {
        return $this->profile;
    }
}