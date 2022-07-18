<?php

class Team
{
    protected $name;
    protected $members = []; 

    public function __construct($name, $members = []){
         $this->name = $name;
         $this->members = $members;
    }

    // Static constructor
    // Nice readable way to creat a new object
    public static function start(...$parms){ // Accept a variable number of arguments
        return new static(...$parms); // Argument unpacking
    }
    
    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {
        
    }

    public function manager()
    {
        
    }
}

class member
{
    protected $name;

    public function __construct($name){
         $this->name = $name;
    }

    public function lastViewed(){
    
    }
    
    
}

// 01. Instance
// $acme = new Team('acme', [
//     'John Doe',
//     'Jane Doe'
// ]);

// 02. Instance via static method
// $acme = Team::start('Acme', [
//     'John Doe',
//     'Jane Doe'
// ]);

// $acme->add('Frank Doe');

// 03. Instance via static method
$acme = Team::start('Acme', [
    new Member('John Doe'),
    new Member('Jane Doe'),
]);



die(var_dump($acme->members()));


