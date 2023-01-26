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

    public function stipendioAnnuale() {
        if ($this -> tredicesima === "NO" && $this -> quattordicesima === "NO"){
            return $this->mensile * 12;
        }   else if ($this -> tredicesima === "SI" && $this -> quattordicesima === "SI") {
            return $this->mensile * 14;
        } else {
            return $this->mensile * 13;
        }
    }

    public function getHTML(){
        return "Stipendio mensile: " . $this->getMensile() . "&euro;" . "<br>"
            . "Tredicesima: " . $this->getTredicesima() . "<br>"
            . "Quattordicesima: " . $this->getQuattordicesima() . "<br>"
            . "Stipendio Annuale: " . $this->stipendioAnnuale() . "&euro;" . "<br>";
    }

}