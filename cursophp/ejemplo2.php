<?php
    


    $productos = [
        [
            'nombre' => 'Tablet',
            'precio' => 200,
            'disponible' => true
        ],
        [
            'nombre' => 'Television Samung',
            'precio' => 300,
            'disponible' => true
        ],
        [
            'nombre' => 'Celular',
            'precio' => 100,
            'disponible' => true
        ]
    ];

    $json = '{"nombre":"Jose Manuel", "edad":16, "ciudad":"Nueva York"}';
    $data = json_decode($json);//Retorno del objeto Php
    $dataAssoc = json_decode($json, true); //Retorno de un arreglo asociativo

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
    <h1>Uso de Json Example</h1>
    <main>
        <pre class="resultado">
            <?php 
                /* var_dump($productos);
                $json = json_encode($productos, JSON_UNESCAPED_UNICODE);  */
            
            ?>
            <br>
            <?php
            /* var_dump($json); */
            ?>
        </pre>
        <table class="contenido">
        <thead>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dataAssoc['nombre']//$data->nombre ?></td>
                <td><?php echo $dataAssoc['edad']//$data->edad ?></td>
                <td><?php echo $dataAssoc['ciudad']//$data->ciudad ?></td>
            </tr>
        </tbody>
    </table>
    </main>
    
</body>
</html>