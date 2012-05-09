
    

<html>
    <head> 
        <script type="text/javascript" src="jav/uitklappen.js"> </script>

        <style type="text/css">nav{border-style: solid; border-left: solid 10px yellowgreen; border-right:  solid 10px yellowgreen; background: peru; text-decoration:inherit;  margin: 33px; padding: 33px; border-radius:10px;} </style></head>
    <body>
        <nav>
            
        <h1>ahahhaha ik vergat </h1>
        <?php
        error_reporting(0);
$hi =2;
$why =4;
include '../php/connect.php';
session_start();
if (isset($_SESSION['username'])){ 
    $help =$_SESSION['username'];

$take = 'SELECT name, username, datum, email , Adres, Postcode FROM gebruiker WHERE username = \''.$help.'\'';
$run = mysql_query("$take");

while ($me = mysql_fetch_assoc($run))
{
$emaill = $me['email'];
$naam1 =$me['name'];
$user = $me['username'];
$dat = $me['datum'];
$adress = $me['Adres'];
$postcod = $me['Postcode'];
echo "E-mail :". $emaill .'<br/>';
echo "Voornaam :". $naam1.'<br/>' ;
echo "Nickname :". $user .'<br/>';
echo "Datum :". $dat.'<br/>';
echo "Adres :". $adress.'<br/>';
echo "Postcode :". $postcod.'<br/>';

}
}



else { 
   // header("Location: ");
           echo  ' <form action="../registratie/login.php" method="post">
        Gebruikernaam    <input type="text" name="username"/><br/>
          Wachtwoord  <input type="password" name="password"/><br/>
            <input type="submit" value="Log in"/><br/>
        </form>
        <a href="registration.php">Registreren?</a>';
        echo  '<a id="displayText" href="javascript:toggle();">Registratie</a> <div id="toggleText" style="display: none"><form name="loginform1" id="loginform1" action="../registratie/registration.php" method="post">
                            <p><label>Naam<br />
                            <input type="text" class="input1" name ="naam" value="'.$naam.'" size="20" />
                    </label></p>                         
                    <p><label>gebruikersnaam<br />
                            <input type="text" class="input1" name="username" value="'. $gebruikersnaam.'" size="20" />
                    </label></p>

                            <p><label>email<br />
                            <input type="text" class="input1" name="email" value="'. $email.' " size="20" />
                    </label></p>
                                        <p><label>Adres<br />
                            <input type="text" class="input1" name="adres" value="'.$adres .'" size="20" />
                    </label></p>
                    <p><label>Postcode<br />
                            <input type="text" class="input1" name="postcode" value="'. $postcode.'" size="20" />
                    </label></p>

 
                    <p><label>Wachtwoord<br />
                            <input type="password" class="input1" name="password" size="20" />
                    </label></p>
                     <p><label>Herhaal je wachtwoord:<br/>
            <input type="password" name="repaitpassword"  size="20"> 
                    </label></p>
                    
                    <p class="submit1">

                                  <input type="submit" name="submit" value="Registreren">
                    </p></div>
            </form>';   
}

?>
        

        </nav>
        </body>
        
    </html>
