<?php

class Movie {

  // all’interno della classe sono dichiarate delle variabili d’istanza:
  public $titolo;
  public $titolo_originale;
  public $durata;

  // all’interno della classe è definito un costruttore:
  public function __construct($_titolo, $_titolo_originale, $_durata){
         $this->titolo =  $_titolo;
         $this->titolo_originale =  $_titolo_originale;
         $this->durata =  $_durata;
  }

  public function getTitle(){
    return $this->titolo;
  }

  // all’interno della classe è definito almeno un metodo:
  public function minutesToHours(){
     return $this->durata / 60;
  }

}


$trasformers = new Movie ("Transformers", "Transformers", 120);

var_dump($trasformers);

echo "Il film si intitola ". $trasformers->getTitle() . " e dura " . $trasformers->minutesToHours() . " ore."  ;