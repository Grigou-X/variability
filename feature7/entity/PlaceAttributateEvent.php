<?php

include_once('feature1/entity/PhysicalEvent.php');
class PlaceAttributateEvent extends PhysicalEvent
{
    public $row;
    public $placeByRow;

    public $actualRow = 1;
    public $actualPlace = 1;

    public function __construct($name, $placeLimit,$address, $row, $placeByRow)
    {
        $this->row = $row;
        $this->placeByRow = $placeByRow;
        parent::__construct($name, $placeLimit, $address);
    }
    
}