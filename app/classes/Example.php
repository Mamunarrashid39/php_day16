<?php
namespace App\classes;
use App\classes\Person;
class Example extends Person
{
    public $firstName ="Mamun";
    protected $middleName;
    private $lastName;
    public $firstNumber=10;
    protected $secondNumber=20;
    private $lastnumber=30;

    public function index()
    {
     //  $this->firstName = "Santo";
       // $this->firstName ="shila";
    //    $x ="bd";
     //   $x=10.34;
     //   $x= "10.34";

     //   echo gettype($this->firstName);
     //   echo $this->firstName;


        $this->firstName="Md";
        echo $this->firstName;

    }
    public function methodOne()
    {
        $this->middleName ="Habibur";
        echo $this->firstName;
    }
    private function methodTwo()
    {
        $this->lastName ="Rahaman";
        echo $this->lastName;
    }
    public function methodThree()
    {
      //  echo $this->distict;
      //  echo $this->division;
       // echo $this->country;
        $this->district();
        $this->division();
        //$this->country();
        $this->xyz();
    }
    private function xyz()
    {
        echo "Hello World"
    }
}