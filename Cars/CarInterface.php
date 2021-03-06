<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 9/23/13
 * Time: 9:11 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Cars;

use Cars\CarTypes;

/**
 * Интерфейс для автомобилей (для этого тестового задания не логичный, нет времени придумывать логику)
 * Class CarInterface
 * @package Cars
 */
interface CarInterface {
    public function setName($name);

    public function setColor($color);

    public function setAge($age);

    public function setType(CarTypes $type);

    public function setNumber($number);
}