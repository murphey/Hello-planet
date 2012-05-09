<?php
session_start();
if ($_SESSION['username'])
echo "Welkom, ".$_SESSION['username']."!<br><a href='uitloggen.php'>Uitloggen</a>";

else 
    die ("Je moet je eerst inloggen!");
?>
