<?php 
    include_once("includes/transportes.php");
    $bicicleta = new Bicicleta( 2 , 1); 
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
            <?php 

                echo $bicicleta->getInfo(); 
                echo $bicicleta->getRuedas(); 
            ?> 
            <hr>
            <?php 
                $auto = new Automovil(4, 4, 'Manual');
                echo $auto->getInfo();
                echo $auto->getTransmision();
            ?>
        </pre>
    </main>
</body>
</html>