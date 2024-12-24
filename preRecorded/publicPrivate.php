<?php 
//there will be 3 method which are addFund,deductFund,getTotal,construct
//class Fund{
//     private $fund;

//     function __construct($initialFund = 0){
//         $this->fund = $initialFund;
//     }


//     public function addFund($money){
//         $this->fund += $money;
//     }

//     public function deductFund($money){
//         $this->fund -= $money;
//     }

//     public function getTotal(){
//         echo "The Total money is {$this->fund} \n";
//     }

// }

// $f1 = new Fund();
  
// $f1->addFund(100);
// $f1->getTotal();
// $f1->deductFund(10);
// $f1->getTotal();




//so ekahne color code #xxxxxx theke (xxx,xxx,xxx) hexadecimal code theke deimal color code e convert korbe..
//ekhane function thakbe getColor(), setColor(), parseColor()

class RGB{
 //color code #ff0000 (255,0,0)   
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode='')
    {
        $this->color = ltrim($colorCode,'#');
        $this->parseColor();
    }
    public function getColor(){
        return $this->color;
    }
    
    public function getRGBColor(){
        return array($this->red, $this->green, $this->blue);
    }

    public function readRGBColor(){
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    
    }
    public function setColor($colorCode){

        $this->color = ltrim($colorCode,'#');
        $this->parseColor();
    }

    private function parseColor(){

        if($this->color){
           
            list($this->red, $this->green, $this->blue) = sscanf($this->color,'%02x%02x%02x');
           
        }
        else{
            list($this->red, $this->green, $this->blue) = [0,0,0];
        }
       
    }
    public function getRed(){
        return $this->red;
    }
    
    public function getGreen(){
        return $this->green;
    }
    public function getBlue(){
        return $this->blue;
    }

}



$myColor = new RGB("#00ff00");
$myColor->readRGBColor();
echo $myColor->getBlue();

