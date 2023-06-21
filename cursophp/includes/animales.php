<?php

abstract class Animal{
    abstract public function hacerSonido();
}

class Perro extends Animal {
    public function __construct(){
    }
    public function hacerSonido()
    {
        echo "¡Guau!";
    }
}

class Gato extends Animal {
    public function __construct(){
    }
    public function hacerSonido()
    {
        echo "Miiiauuu";
    }
}

?>