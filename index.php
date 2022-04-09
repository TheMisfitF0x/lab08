<?php

/*
 * Author: Logan Douglass
 * Date: April 7, 2022
 * Name: index.php
 * Description: The main page for the guestbook website
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of GuestController
$guest_controller = new GuestController();

//default action is index
$action = "index";
if (isset($_GET['action']) && !(empty($_GET['action'])))
    $action = $_GET['action'];

//invoke appropriate method depending on action value
if($action === 'index') {
    $guest_controller->index();
}
else if ($action === 'show'){
    $guest_controller->show();
}
else if ($action === 'sign'){
    $guest_controller->sign();
}
else if ($action === 'error'){
    //default error message
    $message = "We are sorry, but an error has occurred.";

    //retrieve the error message
    if ((isset($_GET['message'])) && !(empty($_GET['message'])))
        $message = $_GET['message'];

    $guest_controller->error($message);
}
else {
    $message = "Invalid action was requested.";
    $guest_controller->error($message);
}