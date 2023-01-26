<?php
require_once("./db.php");
require_once("Models/impiegato.php");
require_once("Models/capo.php");
require_once("Models/stipendio.php");

// creo la classe persona
class Persona {
    private $nome;
    private $cognome;
    private $dataDiNascita;
    private $luogoDiNascita;
    private $codiceFiscale;

    public function __construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale){
        $this -> setNome($nome);
        $this -> setCognome($cognome);
        $this -> setDataDiNascita($dataDiNascita);
        $this -> setLuogoDiNascita($luogoDiNascita);
        $this -> setCodiceFiscale($codiceFiscale);
    }

    public function getNome(){
        return $this -> nome;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function getCognome(){
        return $this -> cognome;
    }

    public function setCognome($cognome){
        $this -> cognome = $cognome;
    }

    public function getDataDiNascita(){
        return $this -> dataDiNascita;
    }

    public function setDataDiNascita($dataDiNascita){
        $this -> dataDiNascita = $dataDiNascita;
    }

    public function getLuogoDiNascita(){
        return $this -> luogoDiNascita;
    }

    public function setLuogoDiNascita($luogoDiNascita){
        $this -> luogoDiNascita = $luogoDiNascita;
    }

    public function getCodiceFiscale(){
        return $this -> codiceFiscale;
    }

    public function setCodiceFiscale($codiceFiscale){
        $this -> codiceFiscale = $codiceFiscale;
    }

    public function getHMTL() {
        return "Nome: " . $this -> getNome() . "<br>"
        . "Cognome: " . $this -> getCognome() . "<br>"
        . "Data di nascita: " . $this -> getDataDiNascita() . "<br>"
        . "Luogo di nascita: " . $this -> getLuogoDiNascita() . "<br>"
        . "Codice fiscale: " . $this -> getCodiceFiscale() . "<br>";
    }
}