<?php

  class Movie{
    public $titolo;
    public $genere;
    private $prezzo;
    public $durata;


    public function __construct($titolo, $genere, $durata){
      $this->titolo = $titolo;
      $this->genere = $genere;
      $this->durata = $durata;
    }

    public function setPrice($prezzo){
      $this->prezzo = $prezzo;
    }

    public function getInfoMovies(){
      return "Il film è " . $this ->titolo . " e il suo genere è: " . $this->genere . " la sua durata è " . $this->durata;
    }

    public function getPrezzo(){
      return "Prezzo:" . $this ->prezzo;
    }
    
    
  }




?>
