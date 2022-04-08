<?php

class ShowGuest
{
    public function display($guest)
    {
        ?>

        <h2>Guest details</h2>

        <ul>
            <li>Firstname: <?=$guest->getFirstName() ?> </li>
            <li>Lastname: <?=$guest->getLastName() ?></li>
            <li>Birthdate: <?=$guest->getBirthDate() ?></li>
            <li>Email:  <?=$guest->getEmail() ?> </li>
        </ul>


<?php
    }
}?>