<?php

namespace Vehicles;
require_once 'VehicleBase.php';

class car extends VehicleBase implements \Serializable {

    public function startEngine()
    {
return 'Car: start Engine';
    }

    public function serialize()
    {
        echo 'Serialize<br>';
        return $this->owner;
         // TODO: Implement serialize() method.
    }
    public function unserialize($serialized)
    {
       echo 'unserialize<br>';
       $this->owner = $serialized;
        // TODO: Implement unserialize() method.
    }
}
