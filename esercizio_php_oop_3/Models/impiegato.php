<?php
require_once("./db.php");
require_once("Models/persona.php");
require_once("Models/stipendio.php");

// creo la classe impiegato
class Impiegato extends Persona {
    private Stipendio $stipendio;
    private $dataDiAssunzione;

    public function __construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale, Stipendio $stipendio, $dataDiAssunzione){
        parent::__construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale);
        $this -> setStipendio($stipendio);
        $this -> setDataDiAssunzione($dataDiAssunzione);
    }

    public function getStipendio(){
        return $this -> stipendio;
    }
    public function setStipendio(Stipendio $stipendio){
        $this -> stipendio = $stipendio;
    }

    public function getDataDiAssunzione(){
        return $this -> dataDiAssunzione;
    }
    public function setDataDiAssunzione($dataDiAssunzione){
        $this -> dataDiAssunzione = $dataDiAssunzione;
    }

    public function getHTML(){
        return parent::getHMTL() . "<br>"
            . $this->getStipendio()->getHTML() . "<br>"
            . "Data di assunzione: " . $this->getDataDiAssunzione();
    }
}