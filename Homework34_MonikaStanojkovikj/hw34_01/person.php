<?php
class Person {
    public $name;
    public $age;

    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    
    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
}

$person = new Person('Monika',25);
$personName = $person->getName();
$personAge = $person->getAge();

var_dump($person);
var_dump($personName);
var_dump($personAge);


