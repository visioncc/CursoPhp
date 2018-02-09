<?php

class Car
{
    private $owner ;
    public function move() {
        echo 'moving<br>';
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

echo 'class car<br>';

$car = new Car();
$car2 = new Car();
$car->move();
$car->setOwner('Andres');
$car2->setOwner('Roberto');

echo 'Owner carro 1:' . $car->GetOwner() . '<br>';
echo 'Owner carro 2:' . $car2->GetOwner();

