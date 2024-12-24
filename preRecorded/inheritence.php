<?php
//ekhene amader ekta class likha lagbe and then etar child class lekha lagbe means inheritence kora lagbe then child 
//theke parent class er method ke call kora lagbe.
class ParentClass{

    public function __construct(){
        $this->sayHi();
    }
    public function sayHi(){
        echo "hi\n";
    }
}

class ChildClass extends ParentClass{
    public function sayHi(){
        parent::sayHi();
        echo "hello";
    }
}

$cc = new ChildClass();

