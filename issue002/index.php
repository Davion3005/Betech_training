<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class testParent{
    public function f1(){
        echo 1;
    }
    
    public function f2(){
        echo 2;
    }
}

class testChild extends testParent{
    function f2(string $a){
        echo $a;
    }
}

$children = new testChild();
$children->f2('Hello'); //Hello