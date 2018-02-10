<?php

namespace Vehicles;

abstract class VehicleBase
{
    private $owner;
    private $type;
    private static $count = 0;

    public function __construct($ownername, $type)
    {
        $this->type = $type;
        $this->owner = $ownername;
        self::$count++;

    }


    public function move($cars) {
        echo $this->startEngine();
        echo '<br>' . $cars . ': moving<br><br>';
    }
    public function GetOwner() {

        return $this->owner;
    }
    public function GetType() {

        return $this->type;
    }

    public static function GetTotal() {

        return self::$count;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    public abstract function startEngine();
}



/**
 * Created by PhpStorm.
 * User: andy
 * Date: 09/02/2018
 * Time: 03:58 PM
 */