<?php

include_once('core/entity/Participation.php');
abstract class Ticket extends Participation
{
    public function __construct($email)
    {
        parent::__construct($email);
    }

    abstract public function send();
    
}