<?php
trait Hello{
    public function sayHello(){
        echo 'Hello';
    }
}

trait World{
    public function sayWorld(){
        echo 'world';
    }
}

trait thanks{
    public function sayThanks(){
        echo '!';
    }
}

trait HelloWorld{
      use Hello,World,thanks;
}

class sayHi{
    use HelloWorld;
}
$hi = new sayHi();
$hi->sayHello();
$hi->sayWorld();
$hi->sayThanks(); //Helloworld
