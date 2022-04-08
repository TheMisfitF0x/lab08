<?php

class Index
{

    public function display() {
        //display page header
        parent::displayHeader("Welcome");


        ?>

        <div id="main-header">Edit Movie Details</div>

        <!-- display movie details in a form -->
        <form class="new-media"  action='../../index.php?action=sign' method="post" style="border: 1px solid #bbb; margin-top: 10px; padding: 10px;">
            <p><strong>Name</strong><br>
                <input name="name" type="text" size="100" value="" required autofocus></p>
            <p><strong>Birth Date</strong>: <input name="birth_date" type="date" value="" required=""></p>
            <p><strong>Email</strong><br>
                <input name="email" type="email" size="40" value="" required=""></p>

            <input type="submit" name="action" value="Sign">

        </form>
        <?php
        //display page footer
        parent::displayFooter();

    }
}