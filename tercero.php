<?php

//---- Diferencia Isset / Empty --- Es importante tener en cuenta que isset y empty pueden generar resultados diferentes en algunos casos. Por ejemplo si una variable está definida pero tiene un valor de 0, isset retornara true, mientras que empty returnara true ya que considera el 0 como un valor vacio. Es resumen, isset se utiliza para verificar si una variable esta definida y no es NULL, mientras que empty se utiliza para verificar si una variable esta vacía.

$nombre = "Johan";

if (isset($nombre)) {
    echo 'La variable esta defenida y tiene un valor';
}else {
    echo 'La variable no esta definida o no tiene valor';
};

echo"<br> <br>";

$variable = "";

if (empty($variable)) {
    echo 'La variable esta defenida y tiene un valor';
}else {
    echo 'La variable no esta definida o no tiene valor';
};

echo"<br> <br>";

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Kevin');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));
echo"<br> <br>";

//Isset - Revisar si un arreglo esta creado o una propiedad esta definida

var_dump(isset($clientes4));
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));
echo"<br> <br>";

//Isser - Permite revisar si hay una propiedad de un arreglo asociativo, existente

var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));
echo"<br> <br>";

//Estructuras Condicionales - If

//Es una estructura de control que permite tomar decisiones en funcion de si se cumple o no una determinada condicion. Se utiliza para definir una accion que si cumple la condicion y otra accion se ejecutara si no se cumple

if (10 > 3) {
    //Si cumple la accion
}else if (10<20) {
    //
}else{
    //Si no cumple la accion
}

$autenticado = true;
$admin = false; //Como es false, va votar que no es autentico

if ($autenticado && $admin) {
    echo "Usuario autenticado correctamente";
}else {
    echo "Usuario no autenticado, inicia sesion";
}
echo"<br> <br>";

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo"<br> <br>";

//Un ejemplo de If con Else

if (!empty($cliente)) {
    echo 'El Arreglo de cliente no esta vacio <br>';
    if ($cliente['saldo']> 0) {
        echo 'El Cliente tiene saldo disponible <br> <br>';
    }else {
        echo 'No hay saldo <br> <br>';
    }
};

if ($cliente['saldo']> 0) {
    echo 'El Cliente tiene saldo';
}elseif ($cliente['informacion']['tipo']=== 'Premium') { //Soltara elseif por que if no cumple la condicion y elseif si, por esto tampoco va a votar else
    echo 'El cliente es Premium';
}else {
    echo 'No hay Cliente definido o no tiene saldo o no es Premium';
};

echo"<br> <br>";

$tecnologia = 'HTML'; // Va leer el case que tiene la variable y si estuviera vacia leeria default, o si es diferente la variable

switch ($tecnologia) {
    case 'PHP':
        echo 'PHP, un execelente lenguaje';
        break;
    case 'JavaScript':
        echo 'Genial, el lenguaje de la web';
        break;
    case 'HTML':
        echo 'Emm..';
        break;
    default:
        echo 'Algun lenguaje que no se cual es';
        break;
};

echo"<br> <br>";

//El Bucle while, esto permite repetir la ejecucion de un bloque de codigo mientras esto cumpla la condicion

//El Bucle do-while, esto es similar al bucle while, pero esto garantiza que el bloque de codigo se ejecuta al menos una vez, independientemente si cumple o no la condicion

//Bucle for, esto permite la ejecucion de un bloque de codigo un numero fijo de veces, se puede controlar el numero de iteraciones mediante un contador

//Ejemplo de While

$i = 0;

while ($i < 10) {
    echo $i . "<br>";

    $i++; //El "++" incrementa la variable
}

echo"<br> <br>";

//Ejemplo de Do While

$a = 100;

do {
    echo $a . '<br>';

    $a++;
} while ($a < 10);

echo"<br> <br>";

//Ejemplo de For Each

$clientes = array('Pedro', 'Juan', 'Karen');

foreach($clientes as $cliente):
    echo $cliente . '<br/>';
endforeach;

echo"<br> <br>";

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200, 
    'tipo' => 'Premium'
];

foreach ($cliente as $key => $valor):
    echo $key . ' - ' . $valor . '<br/>';
endforeach;

$productos = [
    [
        'nombre' => 'Celular',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

echo"<br> <br>";

foreach($productos as $producto){?>
    <li>
        <p>Producto: <?php echo $producto['nombre'];?></p>
        <p>Precio: <?php echo "$" . $producto['precio'];?></p>
        <p><?php echo ($producto['disponible'])? 'Disponible' : 'No Disponible';?></p>
    </li>
<?php
}



?>