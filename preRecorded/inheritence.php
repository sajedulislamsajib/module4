<?php
//ekhene amader ekta class likha lagbe and then etar child class lekha lagbe means inheritence kora lagbe then child 
//theke parent class er method ke call kora lagbe.
// class ParentClass{

//     public function __construct(){
//         $this->sayHi();
//     }
//     public function sayHi(){
//         echo "hi\n";
//     }
// }

// class ChildClass extends ParentClass{
//     public function sayHi(){
//         parent::sayHi();
//         echo "hello";
//     }
// }

// $cc = new ChildClass();

//-----------------------------------------------------------------------------------------------------------------------------------------
//ekhane amader ekta shape class lekha lagbe then oitar 2 ta child class Rectangle or triangle nite hobe. then se 2 tar area calculate korte hobe.

class Shape{
    protected $name;
    protected $area;

    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }
    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}\n";
    }

    public function calculateArea(){}
    }

class Triangle extends Shape{
    private $a,$b,$c;
    public function __construct($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }
    public function calculateArea(){
        $perimeter = ($this->a + $this->b + $this->c)/2;
        $this->area = sqrt($perimeter * ($perimeter-$this->a));
    }

}

class Rectangle extends Shape{
    private $a,$b;
    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    
        parent::__construct("Rectangle");
    }
    public function calculateArea(){
        
        $this->area = $this->a * $this->b;
    }
}

$triangle1 = new Triangle(2,4,6);
$triangle1->getArea();

$Rectangel1 = new Rectangle(4,5);
$Rectangel1->getArea();
