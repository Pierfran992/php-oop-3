<?php
require_once("Models/persona.php");
require_once("Models/impiegato.php");
require_once("Models/capo.php");
require_once("Models/stipendio.php");

// creo uno stipendio
$stipendio1 = new Stipendio("1200", "SI", "NO");

// creo un inpiegato
$impiegato1 = new Impiegato("Gino", "il pandino", "1978-01-05", "pandini", "hahahahaha", $stipendio1, "2000-01-25");