<?php

class Participation 
{
    public $email;

    public $firstname;
    public $lastname;
    public function __construct($email)
    {
        $this->email = $email;
    }

    public function add($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    
}