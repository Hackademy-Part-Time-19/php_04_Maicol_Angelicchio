<?php

class Vertebrates{
    public function __construct(){
        $this->print();
    }
    protected function print(){
        echo "Sono un animale vertebrato". PHP_EOL;
    }
}

class WarmBlooded extends Vertebrates{
    public function __construct(){
        parent::__construct();
    }
    protected function print(){
        parent::print();
        echo "Sono un animale a sangue caldo". PHP_EOL;
    }
}

class ColdBlooded extends Vertebrates{
    public function __construct(){
        parent::__construct();
    }
    protected function print(){
        parent::print();
        echo "Sono un animale a sangue freddo". PHP_EOL;
    }
}

class Mammals extends WarmBlooded{
    public function __construct(){
        parent::__construct();
    }
    protected function print(){
        parent::print();
        echo "Sono un mammifero".PHP_EOL;
    }
}

class Birds extends WarmBlooded{
    public function __construct(){
        parent::__construct();
    }
    protected function print(){
        parent::print();
        echo "Sono un uccello".PHP_EOL;
    }
}

class Fish extends ColdBlooded{
    public function __construct(){
        parent::__construct();
    }
    protected function print(){
        parent::print();
        echo "Sono un pesce".PHP_EOL;
    }
}

class Reptiles extends ColdBlooded{
    public function __construct(){
        parent::__construct();
    }
    protected function print(){
        parent::print();
        echo "Sono un rettile".PHP_EOL;
    }
}

class Amphibians extends ColdBlooded{
    public function __construct(){
        parent::__construct();
    }
    protected function print(){
        parent::print();
        echo "Sono un anfibio".PHP_EOL;
    }
}

$magikarp = new Fish();