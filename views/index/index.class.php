<?php

class Index
{

    public function display() {
        ?>
<!DOCTYPE html>
        <html>
            <head>
                <title> Sign in </title>
            </head>
            <body>
                <div id="main-header">Sign In</div>

                <p><a href = "index.php?action=show">Show All Guests</a></p>
                <form class="new-media"  action='index.php?action=sign' method="post" style="border: 1px solid #bbb; margin-top: 10px; padding: 10px;">
                    <p><strong>First Name</strong><br>
                        <input name="first_name" type="text" size="100" value="" required autofocus></p>
                    <p><strong>Last Name</strong><br>
                        <input name="last_name" type="text" size="100" value="" required autofocus></p>
                    <p><strong>Birth Date</strong>: <input name="birth_date" type="date" value="" required=""></p>
                    <p><strong>Email</strong><br>
                        <input name="email" type="email" size="40" value="" required=""></p>

                    <input type="submit" name="action" value="Sign">

                </form>
            </body>
        </html>

        <?php


    }
}