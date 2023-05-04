<?php
class Bicycle {
    
    public $manufacturer;
    public $model;
    public $year;

    public function __construct($manufacturer,$model,$year)
    {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->year  = $year;

    }

    // Methoden die unsere Eigenschaften returnen
    function echoManuf(){
        return $this->manufacturer;
    }
    function echoModel(){
        return $this->model;
    }
    function echoYear(){
        return $this->year;
    }


   
}

$Bicycle = new Bicycle ("Kalkhoff","Image 3.B Move Wabe",2022);


// Hier geben wir unsere Eigenschaften aus
echo $Bicycle -> echoManuf();
echo "<br>";
echo $Bicycle -> echoModel();
echo "<br>";
echo $Bicycle -> echoYear();


