<?php
require_once "Model/car.class.php";

//primeira maneira
use Model\Car;
$car1 = new Car;
$car1->setCar("Carro");
$car1->setPrice(10200);
echo "<br>Carro ".$car1->getCar()."<br>Preço: ".$car1->getPrice();

//segunda maneira
$car2 = new Model\Car;
$car2->setCar("Carro2");
$car2->setPrice(12344.30);
echo "<br>Carro ".$car2->getCar()."<br>Preço: ".$car2->getPrice();

//terceira maneira
use Model\Car as PF;
$car3 = new PF;
$car3->setCar("Carro3");
$car3->setPrice(98434.20);
echo "<br>Carro ".$car3->getCar()."<br>Preço: ".$car3->getPrice();

 ?>
