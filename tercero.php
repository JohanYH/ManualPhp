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

?>