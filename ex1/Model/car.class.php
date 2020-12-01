<?php
namespace Model;

Class Car
{

  private $car;
  private $price;

    public function getCar()
    {
        return $this->car;
    }

    public function setCar($car)
    {
        $this->car = $car;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

}
  ?>
