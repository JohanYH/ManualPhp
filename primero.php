<?php

//DIFERENCIA ENTRE VAR_DUMB Y PRINT_R. El var_dumb imprime el array proporcionandonos informacion del tamaño y tipos de datos de la variable, el print_r NO imprime nada visible para false y cadenas vacias, asi como tampoco no da información sobre el tamaño de la variable ni sobre el tipo de datos.

echo '<h1>Hola Mundo</h1>'; //Es un texto para imprimir en php o mostrar la informacion que tenemos


$texto = 'Mundo <br> <br>';
printf("Hola1 %s", $texto); // Esta funcion es similar a la de echo, pero solo puede imprimir una cadena de texto a la vez


$mensaje = sprintf("Hola2 %s", $texto ); //La funcion "sprinft" es simililar a la funcion de "printf"
echo $mensaje;

$nombre = "Juan"; // Declarar una variable de texto

$es_valido = true;
echo var_dump($nombre); //Declaracion de una variable en boolean

define("PI", 3.1416); //Declarar una constante numerica

define("Saludo", "Hola Mundo!"); //Declarar una constante en texto

define("ES_VALIDO", true); // Declarar una constante en boolena

// El (int): se utiliza para almacenar numeros enteros

$int = 1;
var_dump($int);

//El (float): se utiliza para almacenar numeros decimales

$float = 1.2;
var_dump($float);

//El (string): se utiliza para almacenar texto y caracteres

$string = "Bom dia!";
var_dump($string); 

//El (bool): se utiliza para almacenar valores de verdad o falsedad, que son representado con "true" o "false"

$bool = true;
var_dump($bool);

//El (array): se utiliza para almacenar una colecion de datos, que puedes ser de diferentes tipdos de datos

$array = [1,2,3,4, "Juan"];
var_dump($array);

//El (object): se utliza para almacenar instancias de clases, que son definiciones de objetos

// El (recourse): se utiliza para almacenar referencias a recursos externos, como conexiones a bases de datos o archivos abiertos

// El (null): se utiliza para representar una variable sin valor o sin defenir

//1. Arithemic Operator

echo"<br>";
echo"<br>";

$sum = 2 + 3 ;
echo "Suma: $sum";
echo"<br>";

$rest = 3 - 2;
echo "Resta: $rest";
echo"<br>";

$multiplicacion = 2 * 3;
echo"Multiplicaicon: $multiplicacion";
echo"<br>";

$division = 2 / 3;
echo"Division: $division";
echo"<br>";

$modul = 2%3;
echo"Modulo: $modul";
echo"<br>";

$pontencial = 2**3;
echo"Pontencial: $pontencial";
echo"<br>";
echo"<br>";

//2. Assignment Operator

/* $a = $a; */ //Igual a

//3. Array Operator

/* $a + $b; Union

$a == $b; Igualdad

$a === $a; Del mismo tipo

$a != $b; Diferente

$a <> $b; Diferente

$ab !== $ba;   No identico */

//4. Operadores bit a bit

/* $a | $b;	(o inclusivo)
$a ^ $b;	(o exclusivo)
~ $a;	    (no)
$a << $b;	(desplazamiento a izquierda)*/
//5. Comparacion de Operadores

/* $a == $b;	Igual	
$a === $b;	Idéntico	
$a != $b;	Diferente	
$a <> $b;	Diferente	
$a !== $b;	No idéntico	
$a < $b;	Menor 
$a > $b;	Mayor 
$a <= $b;	Menor o igual que	
$a >= $b;	Mayor o igual que	
$a <=> $b;	Nave espacial	Un integer menor que, igual a, o mayor que cero cuando $a es respectivamente menor que, igual a, o mayor que $b. */

$numero = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

echo "<p> < </p>";
var_dump($numero < $numero2);

echo "<p>></p><br>";
var_dump($numero > $numero2);

echo "<p> <=> </p>";
var_dump($numero2 <=> $numero);

/* echo $a <=> $b; //1
echo $b <=> $a; //1
echo $a <=> $b; //1
echo $b <=> $a; //1
echo"<br>";
echo"<br>"; */
//6. Ejecucion de operadores

//Backticks

/* $hola = `ls -al`;
echo "<br>$hola</br>";

$puerto = 'www.campuslands.com';
echo `ping -n 3 {$puerto}`; */

//7. Operadores de control de errores

/* $my_file = @file ('non_existent_file') or
    die ("La apertura de archivo ha fallado: el error fue '$php_errormsg'"); */
 
//8.Operadores de incremento/decremento

/* ++$a;	//Pre-incremento	
$a++;	//Post-incremento	
--$a;	//Pre-decremento
$a--; */	//Post-decremento

echo "<h3>Postincremento</h3>";
$aa = 5;
echo "Debe ser 5: " . $aa++ . "<br />\n";
echo "Debe ser 6: " . $aa . "<br />\n";

echo "<h3>Preincremento</h3>";
$a = 5;
echo "Debe ser 6: " . ++$a . "<br />\n";
echo "Debe ser 6: " . $a   . "<br />\n";

echo "<h3>Postdecremento</h3>";
$a = 5;
echo "Debe ser 5: " . $a-- . "<br />\n";
echo "Debe ser 4: " . $a . "<br />\n";

echo "<h3>Predecremento</h3>";
$a = 5;
echo "Debe ser 4: " . --$a . "<br />\n";
echo "Debe ser 4: " . $a . "<br />\n";

//9. Logica de Operadores

/* $a = (false && true()); */
/* $b = (true  || false()); */
/* $c = (false and true()); */
/* $d = (true  or  false()); */

$a = $false || $true;

$b = $false or $true;

var_dump($a, $b);

$c = $true && $false;

$d = $true and $false;

var_dump($c, $d);


?>