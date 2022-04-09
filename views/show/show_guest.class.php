<?php

class ShowGuest
{
    public function display($guests)
    {

        ?>

        <h2>Guest details</h2>
        <?php
        foreach($guests as $guest)
            {;?>
        <ul>
            <li>Firstname: <?=$guest->getFirstName() ?> </li>
            <li>Lastname: <?=$guest->getLastName() ?></li>
            <li>Birthdate: <?=$guest->getBirthDate() ?></li>
            <li>Email:  <?=$guest->getEmail() ?> </li>
        </ul>
            <?php
            }




    }
}?>