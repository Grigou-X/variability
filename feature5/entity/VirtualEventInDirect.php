<?php

include_once('feature2/entity/VirtualEvent.php');
class VirtualEventInDirect extends VirtualEvent
{

    public function __construct($name, $url)
    {
        parent::__construct($name, $url);
    }
    
    public function stream()
    {
        echo "Direct streaming from url: ".$this->url;
    }
}