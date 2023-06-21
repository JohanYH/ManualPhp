<?php 
    include_once("includes/animales.php");
    $pluto = new Perro();
    $Luna = new Gato();
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
            <h2>El Perro Hace</h2>
            <?php
                echo $pluto->hacerSonido(); 
            ?> 
            <hr>
            <h2>El Gato Hace</h2>
            <?php 
                echo $Luna->hacerSonido();
            ?>
        </pre>
    </main>
</body>
</html>
