<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/feature5/entity/VirtualEventInDirect.php');

class VirtualEventReplay extends VirtualEventInDirect
{

    public function __construct($name, $url)
    {
        parent::__construct($name, $url);
    }
    
    public function replay()
    {
        echo "Replaying from url: ".$this->url;
    }
}