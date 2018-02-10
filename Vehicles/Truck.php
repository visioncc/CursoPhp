<?php

namespace Vehicles;
require_once 'VehicleBase.php';
class truck extends VehicleBase{

    private $type;

    public function __construct($ownername, $type)
    {
        $this->type = $type;
        parent::__construct($ownername);
    }

    public function move($trucks) {
        echo $trucks . $this->type . ': moving<br>';
    }


}

/**
 * Created by PhpStorm.
 * User: andy
 * Date: 09/02/2018
 * Time: 04:02 PM
 */