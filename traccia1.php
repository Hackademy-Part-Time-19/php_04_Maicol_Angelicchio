<?php
class Continet{
    public $nameContinent;
    public function __construct($_nameContinent){
        $this->nameContinent = $_nameContinent;
    }
}

class Country extends Continent{
    public $nameCountry;
    public function __construct($_nameContinent, $_nameCountry){
        parent::__construct($nameContinent);
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
}