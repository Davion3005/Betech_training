<?php
/* 
 *Description of Encapsulation
 * 
 * @author Danhnc
 */
class Customer{
    public $username;
    public $password;
    private $_balance;  
    protected $__id;    
    
    public $listAccount = [
        [
            'userName' => 'abc@gmail.com',
            'password' => '123',
        ],
        [
            'userName' => 'xyz@yahoo.com',
            'password' => '456',
        ]
    ]; 
    
    public function setBalance($deposit){
        $this->_balance = $deposit;
    }
    
   public function getBalance(){
       return $this->_balance;
   }
}

$customer = new Customer();
$customer->username = 'AnNguyen';
echo $customer->username;       // AnNguyen

$customer->_balance = 1000000;  // error
echo $customer->_balance;       // error

$customer->setBalance(10000);
$customer->getBalance;
