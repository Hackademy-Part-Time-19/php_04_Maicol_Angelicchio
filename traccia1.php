<?php
class Continent{
    public $nameContinent;
    public function __construct($_nameContinent){
        $this->nameContinent = $_nameContinent;
    }
}

class Country extends Continent{
    public $nameCountry;
    public function __construct($_nameContinent, $_nameCountry){
        parent::__construct($_nameContinent);
        $this->nameCountry = $_nameCountry;
    }
}

class Region extends Country{
    public $nameRegion;
    public function __construct($_nameContinent, $_nameCountry, $_nameRegion){
        parent::__construct($_nameContinent, $_nameCountry);
        $this->nameRegion = $_nameRegion;
    }
}

class Provincie extends Region{
    public $nameProvince;
    public function __construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince){
        parent::__construct($_nameContinent, $_nameCountry, $_nameRegion);
        $this->nameProvince = $_nameProvince;
    }
}

class City extends Provincie{
    public $nameCity;
    public function __construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince, $_nameCity){
        parent::__construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince);
        $this->nameCity = $_nameCity;
    }
}

class Street extends City{
    public $nameStreet;
    public function __construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince, $_nameCity, $_nameStreet){
        parent::__construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince, $_nameCity);
        $this->nameStreet = $_nameStreet;
    }

    public function getMyCurrentLocation(){
        return "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet";
    }

}

$myLocation = new Street("Europa", "Italia", "Puglia", "BA", "Bari", "Strada San Giorgio Martire 2D");
echo $myLocation->getMyCurrentLocation();