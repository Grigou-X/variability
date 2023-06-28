<?php

if(!isset($_SESSION['event']))
{
    if($_SESSION['config']['feature1'])
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if($_SESSION['config']['feature7'])
            {
                include('feature7/entity/placeAttributateEvent.php');
                $_SESSION['event'] = new PlaceAttributateEvent($_POST["name"], $_POST["placeLimit"], $_POST["address"], $_POST["row"], $_POST["placebyrow"]);
            }
            else
            {
                include('feature1/entity/physicalEvent.php');
                $_SESSION['event'] = new PhysicalEvent($_POST["name"], $_POST["placeLimit"], $_POST["address"]);
            }
        }
        else
        {
            include_once('feature1/template/formPhysicalEvent.phtml');
        }
    }
    else if($_SESSION['config']['feature2'])
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            include('feature2/entity/virtualEvent.php');
            $_SESSION['event'] = new VirtualEvent($_POST["name"], $_POST["url"]);
        }
        else
        {
            include_once('feature2/template/formVirtualEvent.phtml');
        }
    }
}
else
{
    if($_SESSION['config']['feature8'])
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            if(isset($_SESSION['config']['feature7'])) {
            }
        }
    }
}
