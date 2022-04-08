<?php

class Index
{

    public function display() {
        //display page header
        parent::displayHeader("Welcome");


        ?>

        <div id="main-header">Edit Movie Details</div>

        <!-- display movie details in a form -->
        <form class="new-media"  action='<?= BASE_URL . "/movie/update/" . $id ?>' method="post" style="border: 1px solid #bbb; margin-top: 10px; padding: 10px;">
            <input type="hidden" name="id" value="<?= $id ?>">
            <p><strong>Title</strong><br>
                <input name="name" type="text" size="100" value="" required autofocus></p>
            <p><strong>Birth Date</strong>: <input name="birth_date" type="date" value="" required=""></p>
            <p><strong>Email</strong><br>
                <input name="email" type="email" size="40" value="" required=""></p>

            <input type="submit" name="action" value="Update Movie">
            <input type="button" value="Cancel" onclick='window.location.href = "<?= BASE_URL . "/movie/detail/" . $id ?>"'>
        </form>
        <?php
        //display page footer
        parent::displayFooter();

    }
}