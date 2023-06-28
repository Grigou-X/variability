<?php

include('core/entity/event.php');
class VirtualEvent extends Event
{
    public $url;
    public function __construct($name, $url)
    {
        $this->url = $url;
        parent::__construct($name);
    }
    
}