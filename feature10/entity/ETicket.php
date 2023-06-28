<?php

include('feature8/entity/Ticket.php');
class ETicket extends Ticket
{

    public function __construct($email)
    {
        parent::__construct($email);
    }
    
    public function send()
    {
        echo "Ticket sent to email: ".$this->email;
    }
}