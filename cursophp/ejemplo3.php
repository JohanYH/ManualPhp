<?php 
    require_once("includes/persona.php");
    $alumno = new Persona('Jose Manuel', 17); 
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

                echo $alumno->getNombre(); 
                echo $alumno->getEdad(); 
                echo Persona::saludar();
            
            ?> 
        </pre>
    </main>
</body>
</html>