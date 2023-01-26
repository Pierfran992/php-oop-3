<?php
require_once("Models/persona.php");
require_once("Models/impiegato.php");
require_once("Models/capo.php");
require_once("Models/stipendio.php");

// creo uno stipendio
$stipendio1 = new Stipendio(1200, "NO", "SI");
$stipendio2 = new Stipendio(900, "NO", "NO");
$stipendio3 = new Stipendio(1000, "SI", "SI");

// creo un array di persone
$persone =
    [
        $impiegati =
            [
                new Impiegato("Gino", "il pandino", "1978-01-05", "pandini", "hahahahaha", $stipendio1, "2000-01-25"),
                new Impiegato("Paolino", "De Paoli", "1992-05-22", "Paola", "GAN3542CHSH2", $stipendio2, "2022-03-12"),
                new Impiegato("Paolino", "De Paoli", "1992-05-22", "Paola", "GAN3542CHSH2", $stipendio3, "2022-03-12"),
            ],
        
        $capi = 
            [
                new Capo("Ichigo", "Kurasaki", "1990-10-20", "Tokyo", "ZAn345kezu675", 1750, 500)
            ],

    ];