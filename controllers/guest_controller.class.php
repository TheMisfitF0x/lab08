<?php
/*
 * Author: Logan Douglass
 * Date: April 7, 2022
 * File Name: guest_controller.class.php
 * Description: Controls all functions related to guests
 */

class GuestController
{
    private $guest_model;
    private $index;
    private $sign_guest;
    private $guest_error;

    public function __construct(){
        //create an object of the GuestModel class
        $this->guest_model = new GuestModel();
        $this->index = new Index();
        $this->sign_guest = new SignGuest();
        $this->guest_error = new GuestError();
    }

    public function index(){
        $this->index->display();
    }

    public function show(){
        $guests = $this->guest_model->getGuests();

        if (!$guests) {
            //display an error
            $message = "There was a problem displaying guests.";
            $this->error($message);
            return;
        }

        // display all movies
        $view = new ShowGuest();
        $view->display($guests);
    }

    public function sign($guest){
        $this->sign_guest->display($guest);
    }

    public function error($message){
        $this->guest_error->display($message);
    }

}