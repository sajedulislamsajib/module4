<?php

class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        echo "My name is {$this->name}\n";
    }
    private function sayName(){
        echo $this->name;
    }
}

class Cat {
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof\n";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1->name = "Sajib";//setting the value of name
$h2->name = "Naim";//setting the value of name
$c1 = new Cat();
$d1 = new Dog();

// $h1->sayHi();
// $c1->sayHi();
// $d1->sayHi();
 
$h1->sayHi();
$h2->sayHi();
                                                     