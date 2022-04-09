<?php

class GuestError
{
    public function display($message) {

        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title> Error </title>
        </head>
    <body>
        <div id="main-header">Error</div>
        <hr>
        <table style="width: 100%; border: none">
            <tr>
                <td style="vertical-align: middle; text-align: center; width:100px">
                </td>
                <td style="text-align: left; vertical-align: top;">
                    <h3> Sorry, but an error has occurred.</h3>
                    <div style="color: red">
                        <?= urldecode($message) ?>
                    </div>
                    <br>
                </td>
            </tr>
        </table>
        <br><br><br><br><hr>
        <a href="../../index.php?action=show">Back to guest list</a>
    </body>
        </html>
        <?php
    }
}