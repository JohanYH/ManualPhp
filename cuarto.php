<?php

//declare(strict_types=1); 
// Esta declaración se utiliza para forzar a la definición de un tipo de dato a una variable esto quiere decir que no dejaremos a la suerte El tipo de dato y su contenido.

//function sumar(int $numero1 = 0, array $numero2 ):void {
//    echo $numero1 + $numero2;
//}
//sumar(10, []);

declare(strict_types=1);

function usuarioAutentico(bool $autentico) : ?string{
    if ($autentico) {
        return 'El Usuario esta autenticado';
    }else {
        return null;
    }
}

$usuario = usuarioAutentico(true);
echo $usuario

// En PHP, include, require, include_once y require_once son funciones que se utilizan para incluir archivos externos en un programa.
?>