<?php

include_once('core/entity/event.php');
class PhysicalEvent extends Event
{
    public $placeLimit;
    public $address;

    public function __construct($name, $placeLimit, $address)
    {
        $this->placeLimit = $placeLimit;
        $this->address = $address;
        parent::__construct($name);
    }
    
}