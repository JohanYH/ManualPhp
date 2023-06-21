<?php

class Persona {
    private $nombre;
    protected $edad;
    private static $nombreAux;

    public function __construct( $nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        self::$nombreAux = $nombre;

    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getEdad()
    {
        $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    private function saludar()
    {
        echo "Hola, mi nombre es " . $this->nombre;
    }
}
?>