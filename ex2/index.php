<?php

spl_autoload_register(function($class) {
  require_once(
    str_replace("\\", "/", $class.".class.php")
  );
});

use Model\Animal;
$animal1 = new Animal();
$animal1->setAnimal("cavalo");
$animal1->setAge("10");
echo "<br>Nome do animal: ".$animal1->getAnimal()."<br>Idade: ".$animal1->getAge();

$product1 = new Model\Product;
$product1->setName("Arroz");
$product1->setPrice(3.99);
echo "<br> Produto: ".$product1->getName()."<br>Preço: ".$product1->getPrice();

use Model\Product as PF;
$product2 = new PF;
$product2->setName("Feijão");
$product2->setPrice(3.50);
echo "<br> Produto: ".$product2->getName()."<br>Preço: ".$product2->getPrice();


 ?>
