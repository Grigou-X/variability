<?php

if(!isset($_SESSION['event']))
{
    if($_SESSION['config']['feature1'])
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if($_SESSION['config']['feature7'])
            {
                include_once('feature7/entity/TicketAttributateEvent.php');
                $_SESSION['event'] = serialize(new TicketAttributateEvent($_POST["name"], $_POST["placeLimit"], $_POST["address"], $_POST["row"], $_POST["placebyrow"]));
                $_SESSION['price'] = $_POST["price"];
                header("Location: index.php");
            }
            else
            {
                include_once('feature1/entity/physicalEvent.php');
                $_SESSION['event'] = serialize(new PhysicalEvent($_POST["name"], $_POST["placeLimit"], $_POST["address"]));
                $_SESSION['price'] = $_POST["price"];
                header("Location: index.php");
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
            
            if($_SESSION['config']['feature6'])
            {
                include_once('feature6/entity/VirtualEventReplay.php');
                $_SESSION['event'] = serialize(new VirtualEventReplay($_POST["name"], $_POST["url"]));
                header("Location: index.php");
            }
            else if($_SESSION['config']['feature5'])
            {
                include_once('feature5/entity/VirtualEventInDirect.php');
                $_SESSION['event'] = serialize(new VirtualEventInDirect($_POST["name"], $_POST["url"]));
                header("Location: index.php");
            }
            else
            {
                include_once('feature2/entity/virtualEvent.php');
                $_SESSION['event'] = serialize(new VirtualEvent($_POST["name"], $_POST["url"]));
                header("Location: index.php");
            }
        }
        else
        {
            include_once('feature2/template/formVirtualEvent.phtml');
            
        }
    }
}
else
{
    if($_SESSION['config']['feature2'])
    {

        if(isset($_POST["email"]))
        {
            include_once('feature2/entity/Invitation.php');
            include_once('feature2/entity/VirtualEvent.php');
            $event = unserialize($_SESSION['event']);
            $invitation = new Invitation($_POST["email"]);
            $invitation->send();
            if(isset($_POST["firstname"]) && isset($_POST["lastname"]))
            {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $invitation->add($firstname, $lastname);
            }
            $event->attendees[] = $invitation;
            $_SESSION['event'] = serialize($event);
            if($_SESSION['config']['feature4'])
            {
                include_once('feature4/controller/InvitationController.php');
            }
        }
        else
        {
            include_once('feature2/template/formInvitation.phtml');
        }
    }

    if($_SESSION['config']['feature8'])
    {
        include_once('feature7/entity/TicketAttributateEvent.php');
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($_SESSION['config']['feature9'] && isset($_POST['addressPaper']))
            {
                include_once('feature9/entity/paperTicket.php');
                $event = unserialize($_SESSION['event']);
                $paperTicket = new PaperTicket($_POST['addressPaper'], $_POST['email']);
                $paperTicket->send();
                if(isset($_POST["firstname"]) && isset($_POST["lastname"]))
                {
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $paperTicket->add($firstname, $lastname);
                }
                $event->attendees[] = $paperTicket;
                $_SESSION['event'] = serialize($event);
                header("Location: index.php");
            }
            
            else if($_SESSION['config']['feature10'] && isset($_POST['email']))
            {
                include_once('feature10/entity/ETicket.php');
                $event = unserialize($_SESSION['event']);
                $eticket = new ETicket($_POST['email']);
                if(isset($_POST["firstname"]) && isset($_POST["lastname"]))
                {
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $eticket->add($firstname, $lastname);
                }
                $event->attendees[] = $eticket;
                $_SESSION['event'] = serialize($event);
                header("Location: index.php");
            }
            else
            {
             include('feature8/template/choice.phtml');
            }
        }
        else
        {
            include('feature8/template/choice.phtml');
        }
    }
}
