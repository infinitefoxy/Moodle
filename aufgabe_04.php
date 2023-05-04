<?php
class Shape {
  public function getArea(){

  }
}


class Rectangle extends Shape {
  private $width;
  private $height;
   
  public function __construct($width, $height)
  {
    $this -> width = $width;
    $this -> height = $height;
  }
  
  // getArea calculates the area of rectangles   
  public function getArea()
  {
    return $this -> width * $this -> height;
  }
}

class Circle extends Shape {
  private $radius;
   
  public function __construct($radius)
  {
    $this -> radius = $radius;
  }
  
  // getArea calculates the area of circles 
  public function getArea()
  {
    return $this -> radius * $this -> radius * pi();
  }
}


$circ = new Circle(4);
$rect = new Rectangle(10,5);

echo $circ -> getArea();
echo "<br>";
echo $rect -> getArea();
