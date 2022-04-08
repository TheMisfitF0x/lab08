<?php

/*
 * Author: Isaac Lowe
 * Date: April 8, 2022
 * Name: guest.class.php
 * Description: Each guest object is meant to model a real world guest.
 */

class Guest
{
    private $last_name, $first_name, $birth_date, $email;

    public function __construct( $last_name, $first_name, $birth_date, $email)
    {
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->birth_date = $birth_date;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * @param mixed $birth_date
     */
    public function setBirthDate($birth_date): void
    {
        $this->birth_date = $birth_date;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }



}