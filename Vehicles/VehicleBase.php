<?php

namespace Vehicles;

class VehicleBase
{
    private $owner ;
    public function __construct($ownername)
    {
        $this ->owner = $ownername;
    }

    public function move($cars) {
        echo $cars . ': moving<br>';
    }
    public function GetOwner() {

        return $this->owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
}
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 09/02/2018
 * Time: 03:58 PM
 */