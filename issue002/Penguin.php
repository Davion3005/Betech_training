<?php

/*
 * Description of Data type casting
 * 
 * @author Danhnc 
 */

class Bird {
    /**
     * Bird action
     */
    public $eye = 2;
    public function fly() {
        echo 'I can fly' . '<br/>';
    }

}

class Penguin {

    public function __construct($param){
        foreach($param as $property => $value){
            $this->$property = $value;
        }
    }
   
}

$param = new Bird();
// var_dump($object1);
$param = new Penguin($param);
var_dump($param);
//$object1 ->fly();
//echo "<br/>";
//var_dump($bird);
//echo "<br/>";

//$bird->fly();
//$penguin = new Penguin();
//$penguin->fly();




