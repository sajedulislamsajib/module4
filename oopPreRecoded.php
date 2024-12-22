<?php

class Human{
    function sayHi(){
        echo "Salam\n";
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
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
$c1->sayHi();
$d1->sayHi();