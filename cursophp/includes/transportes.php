<?php

class Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    
    }

    public function getInfo() : string
    {
        return "El transporte tiene" . $this->ruedas . ",reudas y una capacidad de " . $this->capacidad . ",personas";
    }

    public function getRuedas() : int
    {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte{
    public function getInfo() : string
    {
        return "El transporte tiene " .  $this->ruedas  . ",reudas y una capacidad de " . $this->capacidad . ",personas Y No gasta Gasolina";
    }
}

class Automovil extends Transporte{

    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }

    public function getTransmision() : string
    {
        return $this->transmision;
    }
}

?>