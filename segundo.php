<?php

$nombreCliente = "CampusLands";

echo strlen($nombreCliente); //La funcion de strlen las convierte en string
var_dump($nombreCliente);

//La funcion trim elimina los espacios en blanco

$text = trim($nombreCliente);
echo strlen($text);

//ña funcion strtoupper los convirter en Mayuscula

echo strtoupper($nombreCliente);

//La funcion strytolower las convierte en minusculas 

echo strtolower($nombreCliente);

$mail = "correo@gmail.com <br>";
$mail2 = "Correo@gmail.com <br>";

var_dump(strtolower($mail) === strtolower($mail2));
echo str_replace('Juan', 'J', $nombreCliente); //La funcion str_replace sirve para remplazar caracteres dentro de una cadena

//Revisar si un string existe o no

echo strpos($nombreCliente, 'Pedro');//Devuelve la posicion de la primera coincidencia de la palabra.

$tipoCliente = "Admin - Empresario";

echo "<br>";

echo "El Usuario " . $nombreCliente . " es " . $tipoCliente;

echo "El Usuario  ${nombreCliente}  es    ${tipoCliente}";

echo"<br> <br>";

$carrito = ['Nevera', 'Computadora', 'Celular'];

var_dump($carrito);
echo"<br> <br>";

/* echo $carrito[1]; // Accede a un elemento de Array
echo"<br> <br>"; */

$carrito[3] = 'Nuevo producto...'; //Añade un elemento en el indice que ponga
/* echo $carrito[3];*/
echo"<br> <br>";
var_dump($carrito);

array_push($carrito, 'Teclado');// añade un elemento al final del Array
/* echo $carrito[4]; */
echo"<br> <br>";
var_dump($carrito);

array_unshift($carrito, 'Raton');// Añade un elemento al inicio
echo"<br> <br>";
var_dump($carrito);

$clientes = array('Cliente1', 'Cliente2', 'Cliente3');
echo"<br> <br>";
var_dump($clientes);
echo"<br> <br>";
echo $clientes[1];
echo"<br> <br>";

//

$minArrayAsociativo = array("clave1" => "valor1", "clave2" => "valor2", "clave3" => "valor3");
echo $minArrayAsociativo["clave1"];//Imprime lo que esta asociado con la clave1
foreach($minArrayAsociativo as $clave => $valor){
    echo "<br> <br> Clave: ". $clave . ", Valor: ". $valor;
}

//Ejemplos

$cliente = [
    'nombre' => 'Johan',
    'edad' => 17,
    'informacion' =>[
        'estudio' => 'Bachicherato',
        'Cumpleaños' => 'Agosto 14'
    ]
];

echo"<br> <br>";
var_dump($cliente['informacion']);//Muentra la array creada dentro del Array

$cliente['celular'] = 3028323257;// Crea una nueva variable dentro de la array

echo"<br> <br>";
var_dump($cliente);
echo"<br> <br>";


$carritos = ['Tablet', 'Audifonos', 'Television'];

var_dump(in_array('Celular', $carritos)); //El in_array - Busca el elemento en el arreglo
var_dump(in_array('Audifonos', $carritos));
echo"<br> <br>";

//Ordena los elementos de un arreglo

$numeros = array(1,3,4,5,1,2);

sort($numeros);// Los ordena de menor a mayor
rsort($numeros); //Los ordena de mayor a menor

var_dump($numeros);
echo"<br> <br>";

$cliente = array(
    'saldo' => 200,
    'tipo' =>  'Admin',
    'nombre' => 'Pedro'
);

var_dump($cliente);
echo"<br> <br>";

asort($cliente);//Ordena por valores (Alfabeticamente)
arsort($cliente);//Ordena por valores (Z primero)
ksort($cliente);//Ordena por llaves(Orden Alfabeticamente)
krsort($cliente);//Ordena por llaves(Orden Alfabetico, De la Z hasta la A)


var_dump($cliente)

?>