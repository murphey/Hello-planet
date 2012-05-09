<!DOCTYPE html>
<html>
    <head>
        

    </head>
    <body>
        </body>
    </html>
<?php
session_start();
$name = $_POST['username'];
$password = $_POST['password'];
error_reporting(0);
if ($name && $password)
{
    
    $connect = mysql_connect('localhost', 'root', '') or die ('Kon geen verbinding maken met de database!');
    mysql_select_db('irollator') or die ("Kon geen db vinden");

    $query = mysql_query("SELECT * FROM gebruiker WHERE username='$name'");
    $numrows = mysql_num_rows($query);
    if ($numrows !=0)
    {
        //code om in te 
        while ($row = mysql_fetch_assoc($query))
        {
            
            $dbname = $row['username'];
            $dbpassword = $row['password'];
        }    
        //kijk of ze overeen komen
        if ($name==$dbname&&md5($password)==$dbpassword)
        {
//           header('Location: ../index.php');

            echo "<p>Je bent succesvol ingelogd! <a href='lid.php'> Klik </p></a> $name";
            $_SESSION['username']=$name;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else 
            echo "incorrect wachtwoord";
    }
    else 
        die ("Gebruikers naam bestaat niet");
//    echo $numrows;
}
else 
    die ("Plaats A.U.B een gebruikers naam en een wachtwoord");
?>
