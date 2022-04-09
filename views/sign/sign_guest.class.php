<?php
/**
 * Author: Logan Douglass
 * Date: April 8, 2022
 * File Name: sign_guest.class.php
 * Description: displays the confirmation message
 **/

class SignGuest
{
    public function display(){

        ?>
        <h1>Successfully signed the guestbook!</h1>

        <a href="index.php?action=show"><button>Continue</button></a>
<?php    }
}?>