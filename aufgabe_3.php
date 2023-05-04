<?php
class Person {
    
    public $name;
    public $age;
    public $gender;

    public function __construct($name,$age,$gender)
    {
        $this->name = $name;
        $this->$age = $age;
        $this->$gender = $gender;
        }

    function displayInfo(){
        $this->name;
        $this->age;
        $this->gender;
        
        foreach($this as $displayInfo){
            echo $displayInfo;
        }
    }
}

    class Student extends Person{
        public $studentID;
        public $course;

        public function __construct($studentID,$course)
        {
            $this->studentID = $studentID;
            $this->$course = $course;
            }

        function displayInfo(){

            $this->studentID;
            $this->course;
            foreach($this as $displayInfo){
                echo $displayInfo;
            }
        }
    }

    class Teacher extends Person{
        public $teacherID;
        public $subject;

        public function __construct($teacherID,$subject)
        {
            $this->teacherID = $teacherID;
            $this->$subject = $subject;
            }

        function displayInfo(){

            $this->teacherID;
            $this->subject;
            foreach($this as $displayInfo){
                echo $displayInfo;
            }
        }
    }
   


    $person = new Person ("Pat","36","W");
    $student = new Student ("123","Bio");
    $teacher = new Teacher ("333","Chemie");


// Hier geben wir unsere Eigenschaften aus
echo $person -> displayInfo();
echo "<br>";
echo $student -> displayInfo();
echo "<br>";
echo $teacher -> displayInfo();
echo "<br>";
