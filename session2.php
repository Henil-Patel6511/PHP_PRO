<?php
session_start();
?>
<html>
    <body>
        <?php
        echo "<br><br>current session is: ".$_session["user"];
        echo "<br><br>session is".session_id();

        if (!isset($_SESSION['c']))
        {
            $_SESSION['c'] = 1;
        }
        else
        {
            $_SESSION['c']++;
        }
        echo ("<br><br>counter os session: ".$_SESSION['c']);
        ?>
    </body>
</html>