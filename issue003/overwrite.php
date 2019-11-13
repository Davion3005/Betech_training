<?php
class Animal{
    
    var $eye = '';
    public function sleep(){
         echo 'sleep';
    }
}

class Bird extends Animal{
    public function sleep(){
        echo 'not sleep';
    }
}

$chichChoe = new Bird;
$chichChoe->sleep();

// Dependency Inversion Principle Violation
class Mailer
{
//
}
class SendWelcomeMessage
{
    private $mailer;
    public function __construct( $mailer)
    {
        $this->mailer = $mailer;
    }
}