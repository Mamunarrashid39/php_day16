<?php
namespace App\classes;

class Operator
{


    // ...........Operator
    /*
    *Arithmatice Operator
     * Binery operator (+,-,*,//%)
     * Unery Operator(++, --,(-) )
     *
     * Assignment Operator( =, +=,-=, /=,%=,//=)
     * Condedionaln Operator (>,>=, <=, ==, !=, ===, !==)
     * Logical Operator (&&,//,!)
     *
    */


     //public $x=10;
   //  public $y=20;

    public $x;
    public $y;
    protected $z;

    public function index()

    {
        $this->x=10;
        $this->y=20;
        $this->z=30;

        switch ($this->y)
        {
            case 10:
                echo "Hello  world";
                break;
            case 20:
                echo "hello bitm";
               // break;
            case 30:
                echo "hello Banhgladesh";
                break;
            default:
                echo "bye";
        }



    /*   if{
            ($this-> >$this->y)
            {
                echo "hello bitm"l;

            }
            elseif($this->y >$this->z)
            {
                echo "hello dhaka";

            }
            elseif($this->z >$this->x)
            {
                echo "hello basis";
            }
        }
    */

        //=========Statement ====
        /*
         * if
         * if else
         * if slse if
         * Switch
         *
         *
         * Reapeat statement
         * for
         *
         * Single line
         * condition Statement
         * for
         * Whele
         * do whele

         */



     /*   if ($this->x < $$this->y)
        {
            echo "Its true";

        }
        else{
            echo {
                echo "flase";
            }
        }
        */

       /*
         echo ($this-> x > $this->y) || ($this->y > $this->z) ;
         echo "<br/>...........<br/">;
         echo ($this->x > $this->y) || ($this->y < $this->z) ;
         echo "<br/>...........<br/">;
         echo ($this->x < $this->y) || ($this->y > $this->z) ;
         echo "<br/>...........<br/">;
         echo ($this->x < $this->y) || ($this->y<$this->z);
         echo "<br/>...........<br/">;

       */




     /*
        $this->x=10;
        $this->y=20;


        echo $this->x+=$this->y;
        echo "<br/";

        echo $this->x-=$this->y;
        echo "<br/";
        echo $this->x*=$this->y;
        echo "<br/";
        echo $this->x/=$this->y;
        echo "<br/";
        echo $this->x%=$this->y;
        echo "<br/";
        echo $this->x/=$this->y;
        echo "<br/";
        echo $this->x.=$this->y;
        echo "<br/";


        */





        echo $this->x++;
        echo "<br/>";
        echo $this->x--;
        echo "<br/>"; //
        echo ++$this->x;
        echo "<br/>";
        echo $this->x;
        echo "<br/>";
        echo $this->x++;
        echo "<br/>";
        echo -- $this->x;
        echo "<br/>";
        echo $this->x++;
        echo "<br/>";
        echo $this->x--;
        echo "<br/>"; //



        //  echo $this->x++;
     //   echo $this->x--;

        echo $this->x + $this->y;
        echo "<br/>";
        echo $this->x- $this->y;
        echo "<br/>";
        echo $this->x * $this->y;
        echo "<br/>";


    }
}