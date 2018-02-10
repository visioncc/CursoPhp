<?php

include 'VehicleBase.php';
include 'Car.php';
include 'Truck.php';
include 'ToyCar.php';

use Vehicles\{Car, Truck, ToyCar} ;



echo '<h1>class</h1><br>';


$ToyCar = new ToyCar('Ian', 'HotWheels');
$car = new Car('andy', 'Coupe');
$car2 = new Car('roberto', 'Sedan');
$truck = new truck('jose', 'Explorer');
$truck2 = new truck('martin', 'Pickup');

try {
    echo 'Owner ToyCar 1:' . $ToyCar->GetOwner() . ' Type: ' . $ToyCar->GetType() . '<br>';
    $ToyCar->move('ToyCar 1');
} catch (Exception $e){
    echo '<h1>This is a Toy</h1><br>';}finally{
    echo 'Finally<br>';
}
echo 'Owner carro 1:' . $car->GetOwner() . ' Type: ' . $car->GetType() . '<br>';
$car->move('car 1');
echo 'GPS pos:' .  $car->getPos();
echo 'Owner carro 2:' . $car2->GetOwner() . ' Type: ' . $car2->GetType() . '<br>';
$car2->move('car 2');
echo 'Owner truck 1:' . $truck->GetOwner() . ' Type: ' . $truck->GetType() . '<br>';
$truck->move('truck1');
echo 'Owner truck 2:' . $truck2->GetOwner() . ' Type: ' . $truck2->GetType() . '<br>';
$truck2->move('truck2');

echo 'Total Trucks:' . Truck::GetTotal()  . '<br>';
echo 'Total cars:' . Car::GetTotal()  . '<br>';

$ser = serialize($car2);
$newCar = unserialize($ser);

echo 'NewCar Owner: ' . $newCar->getOwner() . '<br>';


