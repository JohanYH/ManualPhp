<?php
    include_once("includes/figuras.php");
    $cubo = new Cubo(5);
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
            <h2>La Area es: </h2>
            <?php
                echo $cubo->calcularArea();
            ?> 
            <h2>El Volumen es: </h2>
            <?php
                echo $cubo->calcularVolumen();
            ?>
        </pre>
    </main>
</body>
</html>