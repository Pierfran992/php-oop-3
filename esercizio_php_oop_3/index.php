<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person</title>

    <?php
    require_once("./db.php");
    ?>
</head>
<body>
    <?php
    echo $impiegato1->getHTML();
    ?>
</body>
</html>