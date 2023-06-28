<?php

include_once('core/entity/Participation.php');
class Invitation extends Participation
{

    public function __construct($email)
    {
        parent::__construct($email);
    }
    
    public function send()
    {
        echo "Invitation sent to email: ".$this->email;
    }
}