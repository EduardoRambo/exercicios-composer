<?php

namespace App\Model;

class Game
{

  private $name;
  private $genre;

  public function getName()
  {
      return $this->name;
  }

  public function setName($name)
  {
      $this->name = $name;

      return $this;
  }

  public function getGenre()
  {
      return $this->genre;
  }

  public function setGenre($genre)
  {
      $this->genre = $genre;

      return $this;
  }
}

?>
