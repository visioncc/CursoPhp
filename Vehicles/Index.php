<?php

include 'VehicleBase.php';
include 'Car.php';
include 'Truck.php';

use Vehicles\{Car, Truck} ;





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


