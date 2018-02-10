<?php

namespace Vehicles;
require_once 'VehicleBase.php';

class car extends VehicleBase{

    public function move($cars) {
        echo $cars . ': moving<br>';
    }

}
