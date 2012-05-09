<?php
error_reporting(0);
echo "<h1>Registreren</h1>";
$submit = $_POST['submit'];
$naam = strip_tags($_POST['naam']);
$gebruikersnaam =strip_tags( $_POST['username']);
$email = strip_tags($_POST['email']);
$adres = strip_tags($_POST['adres']);
$postcode = strip_tags($_POST['postcode']);
$password =  ($_POST['password']);
$repaitpassword = strip_tags($_POST['repaitpassword']);
$date = date("Y-m-d");


if ($submit)
{
    if ($naam&&$gebruikersnaam&&$email&&$password&&$repaitpassword&&$adres&&$postcode)
    {  

        if ($password==$repaitpassword)
        {
                        //check de lengte
            if (strlen($gebruikersnaam)>25||strlen($naam)>25||strlen($email)>30||strlen($adres)>30||strlen($postcode)>30)
                 {      
            echo "maximale lengte van nick name of naam is te lang";
                 }
                         else
        {       //check lengte van wachtwoord
            if(strlen($password)>25||strlen($password)<6)
            {
               echo "Password moet tussen de 6 tot 25 characters zijn";
            }
            else
            {
                //registreer de gebruiker
                        //encryptid wachtwoord
            $password = md5($password);
            $repaitpassword = md5($repaitpassword);
            echo "Je bent succesvol geregistreerd";
           // open je database
            
            $connect = mysql_connect('localhost', 'root', '') or die ('Kon geen verbinding maken met de database!');
            mysql_select_db('irollator') or die ("Kon geen db vinden");
            $queryreg = mysql_query
            ("INSERT INTO gebruiker VALUES ('','$naam','$gebruikersnaam','$email','$password','$date','$adres','$postcode')       
            ");
            die ("Yes je bent geregistreerd! $email f $adres<a href ='index.php'> Return naar </a>");


                                    
            
            }
        }
     }       
        
  else 
      echo "Je wachtwoord klopt niet";
  }
   
 else 
     echo "Vul A.U.B alle velden in";
    
}
?>

<!-- 
<html>
<p>
<form action='registration.php' method='POST'>
   <br> Jouw naam:<br>
      <input type='text' name='naam' value='/**php/</? /**echo $naam; ?>'><br>
      kies een gebruikers naam<br>
      <input type='text' name='username' value=/**php/</? /**echo $gebruikersnaam; ?>'><br>
	  kies je email adres<br>
	  <input type='text' name='email' value='/**php/</? /** echo $email; ?>'><br>
    
      Kies een wachtwoord:<br>
      <input type='password' name='password' > <br> <br>
      Herhaal je wachtwoord:<br>
            <input type='password' name='repaitpassword' > <br>
                <p>
      <input type='submit' name="submit" value='Registreren'>
</form>
  </html> --!>