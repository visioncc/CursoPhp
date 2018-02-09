<?php

class Vehicle
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

class car extends Vehicle{

    public function move($cars) {
        echo $cars . ': moving<br>';
    }

}

class truck extends Vehicle{

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

echo 'class car<br>';

$car = new Car('andy');
$car2 = new Car('roberto');
$truck = new truck('jose', 'Explorer');
$truck2 = new truck('martin', 'Pickup');
$car->move('car 1');
$car2->move('car 2');
$truck->move('truck1');
$truck2->move('truck2');


echo 'Owner carro 1:' . $car->GetOwner() . '<br>';
echo 'Owner carro 2:' . $car2->GetOwner() . '<br>';
echo 'Owner truck 1:' . $truck->GetOwner() . '<br>';
echo 'Owner truck 2:' . $truck2->GetOwner() . '<br>';


