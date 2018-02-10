<?php

namespace Vehicles;
require_once 'VehicleBase.php';

class ToyCar extends VehicleBase {

    public function startEngine()
    {
        throw new \Exception('Engine not found');
    }

}
