<?php

class Event
{
    public $name;
    public $attendees = array();
    public function __construct($name)
    {
        $this->name = $name;
    }
    
}