<?php

include_once('feature8/entity/Ticket.php');
class PaperTicket extends Ticket
{

    public $address;
    public function __construct($email,$address)
    {
        $this->address = $address;
        parent::__construct($email);
    }
    
    public function send()
    {
        echo "Ticket sent to address: ".$this->address;
    }
}