<?php
namespace App\classes;
class Person
{

    public $district ="Saver";
    protected $division="Dhaka";
    private $country="Bangladesh";

    public function district()
    {
        echo "Dhaka";

    }
    protected function division()
    {
        echo "Dhaka";
      //  echo "<br/>";
     //   echo "<br/>";
       // $this->country();
    }
    private function country ()
    {
        echo "Bangladesh";
    }
}