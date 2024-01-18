<?php

class Car{
    private $num_telaio;
    public function __construct($_num_telaio){
        $this->num_telaio = $_num_telaio;
    }
    public function description(){
        return "e numero telaio $this->num_telaio";
    }
}

class Fiat extends Car{
    protected $license;
    protected $name;
    public function __construct($_num_telaio, $_name, $_license){
        parent::__construct($_num_telaio);
        $this->license = $_license;
        $this->name = $_name;
    }

    public function description(){ 
        return "La mia macchina è $this->name, con targa $this->license ".parent::description();
    }
}

$myCar = new Fiat("1234", "Opel", "ND 123 OJ");
echo $myCar->description().PHP_EOL;

var_dump($myCar);
