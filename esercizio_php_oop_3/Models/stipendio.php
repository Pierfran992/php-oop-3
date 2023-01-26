<?php
require_once("./db.php");

//creo la classe stipendio
class Stipendio {
    private $mensile;
    private $tredicesima;
    private $quattordicesima;

    public function __construct($mensile, $tredicesima, $quattordicesima){
        $this -> setMensile($mensile);
        $this -> setTredicesima($tredicesima);
        $this -> setQuattordicesima($quattordicesima);
    }

    public function getMensile(){
        return $this-> mensile;
    }
    public function setMensile($mensile){
        $this -> mensile = $mensile;
    }

    public function getTredicesima(){
        return $this-> tredicesima;
    }
    public function setTredicesima($tredicesima){
        $this -> tredicesima = $tredicesima;
    }

    public function getQuattordicesima(){
        return $this-> quattordicesima;
    }
    public function setQuattordicesima($quattordicesima){
        $this -> quattordicesima = $quattordicesima;
    }

    public function getHTML(){
        return "Stipendio mensile: " .$this -> getMensile() . "<br>"
            . "Tredicesima: " . $this -> getTredicesima() . "<br>"
            . "Quattordicesima: " . $this -> getQuattordicesima() . "<br>";
    }

}