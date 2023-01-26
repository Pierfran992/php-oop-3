<?php
require_once("./db.php");
require_once("Models/persona.php");
require_once("Models/stipendio.php");

// creo la classe capo
class Capo extends Persona {
    private $dividendo;
    private $bonus;

    public function __construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale, $dividendo, $bonus){
        parent::__construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale);

        $this -> setDividendo($dividendo);
        $this -> setBonus($bonus);
    }

    public function getDividendo(){
        return $this -> dividendo;
    }
    public function setDividendo($dividendo){
        $this -> dividendo = $dividendo;
    }

    public function getBonus(){
        return $this -> bonus;
    }
    public function setBonus($bonus){
        $this -> bonus = $bonus;
    }

    public function getHTML(){
        return parent :: getHTML() . "<br>"
            . "Dividendo: " . $this -> getDividendo() . "<br>"
            . "Bonus: " . $this -> getBonus() . "<hr>";
    }

}