<?php
/* 
 *Description of Encapsulation
 * 
 * @author Danhnc
 */
class Customer{
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
    
    public $username;
    public $password;
    private $balance;  
    
}

$customer = new Customer();
$customer->username = 'AnNguyen';
echo $customer->username;       // AnNguyen

$customer->balance = 1000000;  // error
echo $customer->balance;       // error

