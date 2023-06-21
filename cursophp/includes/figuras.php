<?php

interface Figura{
    public function calcularArea();
}

interface Figura3D extends Figura{
    public function calcularVolumen();
}

class Cubo implements Figura3D{
    private $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return 6 * pow($this->lado, 3);
    }

    public function calcularVolumen()
    {
        return pow($this->lado, 3);
    }
}

?>

<?php

interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas(): int;
}

class Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad )
    {
    }

    public function getInfo() : string
    {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
    }

    public function getRuedas() : int
    {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
    }

    public function getInfo() : string
    {
        return "El transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas  y tiene el color " . $this->color;
    }

    public function getColor(): string
    {
       return "El color es " . $this->color  ;
    }
}

?>