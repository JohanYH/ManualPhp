<?php
    include_once("includes/figuras.php");
    var_dump($transporte = new Transporte(8, 20));
    var_dump($auto = new Automovil(4, 4, 'Rojo'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Document</title>
</head>
<body>
    <header>
        <?php include ("includes/header.php") ?>
    </header>
    <main>
        <pre class="resultado">
            <h2>Transporte</h2>
            <?php
                echo $transporte->getInfo();
            ?> 
            <h2>Auto</h2>
            <?php
                echo $auto->getInfo();
                echo "<br> <br>";
                echo "<h2>Color</h2>";
                echo $auto->getColor();
            ?>
        </pre>
    </main>
</body>
</html>