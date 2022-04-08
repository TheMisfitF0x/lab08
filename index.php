<?php

/*
 * Author: your name
 * Date: today's date
 * Name: index.php
 * Description: short description about this file
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of GuestController
$guest_controller = new GuestController();

//add your code below this line to complete this file
//default action is list all toys
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
    if (isset($_POST['first_name']) && !(empty($_POST['first_name'])))
        $first_name = $_POST['first_name'];
    if (isset($_POST['last_name']) && !(empty($_POST['last_name'])))
        $last_name = $_POST['last_name'];
    if (isset($_POST['birth_date']) && !(empty($_POST['birth_date'])))
        $birth_date = $_POST['birth_date'];
    if (isset($_POST['email']) && !(empty($_POST['email'])))
        $email = $_POST['email'];
    $guest_controller->sign($first_name,$last_name,$birth_date,$email);
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