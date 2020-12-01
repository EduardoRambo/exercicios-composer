<?php

require_once "vendor/autoload.php";

  use Model\Game;
  $game1 = new Game();
  $game1->setName("Grim dawn");
  $game1->setGenre("Hack and slash");
  echo "<br>Jogo: ".$game1->getName()."<br>Gênero do jogo: ".$game1->getGenre();

  $game2 = new Model\Game;
  $game2->setName("Warcraft 3");
  $game2->setGenre("Estratégia em tempo real");
  echo "<br>Jogo: ".$game2->getName()."<br>Gênero do jogo: ".$game2->getGenre();

  use Model\Game as PF;
  $game3 = new PF;
  $game3->setName("Darkest Dungeon");
  $game3->setGenre("Roguelike");
  echo "<br>Jogo: ".$game3->getName()."<br>Gênero do jogo: ".$game3->getGenre();

 ?>
