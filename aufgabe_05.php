<?php

abstract class Animal {
abstract public function makeSound() : string;
abstract public function eat($food);
}

// Child Class
class Cat extends Animal {
    public function makeSound() : string {
        return " Meow! ";
    }

    public function eat($food) {
        return "The cat is eating $food";
    }

}

class Dog extends Animal {
    public function makeSound() : string {
        return "Woof!";
    }

    public function eat($food) {
        return "The dog is eating $food";
    }
}


// Cat
$cat = new Cat();
echo $cat->makeSound();
echo "<br>";
echo $cat->eat("Whiskas");

echo "<br>";
echo "<br>";

// Dog
$dog = new Dog();
echo $dog->makeSound();
echo "<br>";
echo $dog->eat("Pedigree");