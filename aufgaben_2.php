<?php
class Person {
	private $name;
	private $age;
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getAge() {
		return $this->age;
	}
	
	public function setAge($age) {
		$this->age = $age;
	}
}

$person = new Person();

$person->setName("Pati");
$person->setAge("36");
 
echo "Name: ".$person->getName(). "<br> Alter: " .$person->getAge();