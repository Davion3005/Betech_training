
<?php


 
// PHP program to convert an class object 
// to object of another class 
  
// Original class 
class Geeks1 { 
      
    var $a = 'geeksforgeeks'; 
      
    function print_geeksforgeeks() { 
        print('geeksforgeeks'); 
    } 
} 
  
// Final class 
class Geeks2 { 
  
    // Constructor function of class Geeks2 
    public function __construct($object) { 
  
        // Initializing class properties 
        foreach($object as $property => $value) { 
            $this->$property = $value; 
        } 
    } 
} 
  
// Initializing an object of class Geeks1 
$object1 = new Geeks1(); 
  
// Printing original object of class Geeks1 
print_r($object1); 
  
// Initializing an object of class Geeks2 
// using an object of class Geeks1 
$object1 = new Geeks2($object1); 
  
// Printing object of class Geeks2 
print_r($object1); 
  
?> 