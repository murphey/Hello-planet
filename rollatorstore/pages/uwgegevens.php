<?php
error_reporting(0);
	// Opvragen van order informatie.
	$sOrderId = rand(1000000, 9999999); // Uniek order ID
	$sOrderDescription = 'Order omschrijving'; // Omschrijving
	$fOrderAmount = rand(100, 99999) / 100; // Bedrag (in decimaal!!)
$hans=$_POST['totaal_id'];
$productnaam=$_POST['naam_id'];
?>
<!DOCTYPE html>
<html>
<!--copyright Murphey Sistina-->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<link href="../styles/stijlblad_uwgegevens.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="jav/uitklappen.js"></script>
	<title>Rollatorstore - Uw gegevens</title>
</head>
<body>
	<div id="wrapper">
		<header>
			<div id="logo">
				<a href="../index.php"><img src="../images/logo.png"></a>
			</div>
			
			<div id="winkelmandje">
				<div id="winkelmandje_afbeelding"></div>
				<div id="winkelmandje_box">
					<p class="text_winkelmandje">U heeft <b>1 product(en)</b> in uw winkelmandje<br>Totaal <b>&euro; 494,10</b></p>
				
					
					<div id="button_winkelmandje">
						<div id="button_bekijkproducten"><a href="winkelmandje.php"><img src="../images/buttons/bekijkproducten.png"></a></div>
						<div id="button_afrekenen"><a href="uwgegevens.php"><img src="../images/buttons/afrekenen.png"></a></div>
					</div>	
					
				</div>
				
				
				
			</div>
		</header>
		
		<div id="nav">
			<nav>
				<a href="../index.php"><img src="../images/menu/home.png"></a
				><a href="producten.html"><img src="../images/menu/producten.png"></a
				><a href="accessoires.html"><img src="../images/menu/accessoires.png"></a
				><a href="algemene_informatie.html"><img src="../images/menu/algemeneinformatie.png"></a>
			</nav>
			
			
		</div>
		
		
		
		
		<div id="interest">
			<div id="uwvoordeel"></div>
			<div id="ideal">
				<div id="ideal_tekst"><b>Gemakkelijk</b> en <b>veilig</b> betalen met iDeal of per overboeking</div>
			</div>
			<div id="break_interest_1"></div>
			<div id="clock">
				<div id="clock_tekst">V&ograve;&ograve;r 17:00 uur op werkdagen besteld, <b>volgende dag in huis</b></div>
			</div>
			<div id="break_interest_2"></div>
			<div id="vinkje">
				<div id="vinkje_tekst">2 jaar kwaliteitsgarantie</div>
			</div>
		
			
			<div id="contact">
				<div id="contact_text"></div>
				<div id="klantenservice_tekst"><b>Klantenservice</b> +31 (0) 20 17 870 35</div>
				<a href="formulier.html" ><div id="button_klantenservice"></div></a>
			</div>
		</div>	
		
		<div id="content">	
			<div id="producten">
				<div id="product_info">
					<h2>Winkelmandje</h2>
					
					<div id="proces_winkelmandje">
						<a href="winkelmandje.php"><img src="../images/winkelmandje/winkelmandje_button.png"></a
						><a href="#"><img src="../images/winkelmandje/uwgegevens_button.png"></a
						><a href="#"><img src="../images/winkelmandje/betaling_button_hover.png"></a
						><a href="#"><img src="../images/winkelmandje/bevestiging_button_hover.png"></a>
					
					</div>
				
				</div>
			
				<div id="content">	
					<div id="product_info_index"><br>
					<img src="../images/producten/rollz_motion_winkelmandje.png"><div class="text_winkelmandje_proces">Rollz motion<br>
					&euro; 494,10
					
					</div>
					
							<?php $title = $_POST['title'];
                                                        echo $title; ?>
							        
                                                <?php
                                                echo '<div id="formulier_uwgegevens">';
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
                                                echo "<div id='bord'><p>E-mail: ". $emaill .'<br/>';
                                                echo "Voornaam: " .  $naam1.'<br/>' ;
                                                echo "Nickname: " .  $user .'<br/>';
                                                echo "Datum: "  . $dat.'<br/>';
                                                echo "Adres: "  . $adress.'<br/>';
                                                echo "Postcode: " . $postcod.'<br/></p></div>';

                                                }
                                                }
                                                else { 
                                                //    header("Location: ");
                                                           echo  '<b> <form action="../registratie/login.php" method="post">
                                                        <p>Gebruikernaam    <input type="text" name="username"/></p>
                                                         <p> Wachtwoord &nbsp; &nbsp; &nbsp;&nbsp; <input type="password" name="password"/><br/>
                                                          <br/> &nbsp;&nbsp; <input type="submit" value="Log in"/></p>
                                                        </form>
                                                        <a href="registration.php"></a></b>';
                                                                   echo  '<a id="displayText" href="javascript:toggle();">Registratie</a> <div id="toggleText" style="display: none"><form name="loginform1" id="loginform1" action="../registratie/registration.php" method="post">
                            <p><label>Naam<br/>
                            <input type="text" class="input1" name ="naam" value="'.$naam.'" size="20" />
                    </label></p>                         
                    <p><label>Gebruikersnaam<br/>
                            <input type="text" class="input1" name="username" value="'. $gebruikersnaam.'" size="20" />
                    </label></p>

                            <p><label>Email<br/>
                            <input type="text" class="input1" name="email" value="'. $email.' " size="20" />
                    </label></p>
                                        <p><label>Adres<br/>
                            <input type="text" class="input1" name="adres" value="'.$adres .'" size="20" />
                    </label></p>
                    <p><label>Postcode<br/>
                            <input type="text" class="input1" name="postcode" value="'. $postcode.'" size="20" />
                    </label></p>

 
                    <p><label>Wachtwoord<br/>
                            <input type="password" class="input1" name="password" size="20" />
                    </label></p>
                     <p><label>Herhaal je wachtwoord<br/>
            <input type="password" name="repaitpassword"  size="20"> 
                    </label></p>
                    
                    <p class="submit1">

                                  <input type="submit" name="submit" value="Registreren">
                    </p></div>
            </form>' ; 

                                                }
                                                ?>
						
					
					
						
			
				<?php 
                                                session_start();
                                    if (isset($_SESSION['username'])){
                                     echo '
			                         <form action="betaling.php" method="post">
			<!--<h1>Uw iDEAL transactie</h1>-->
			<p><b><!--Order ID:--><input type="hidden" name="order_id" size="30" value="'. $productnaam .'"><!--Order omschrijving:--><br/><br/><br/>
                                <input type="hidden" name="order_description" size="30" value="'. $productnaam.'">
                                '. $productnaam.'
                                
                             <!--Order bedrag:-->
                                <input  type="hidden" name="order_amount" size="30"  value="'.$hans.'"> <!--(EUR)-->
                            <div id="bestelling"> <input name="_submit" type="image" src="../images/buttons/verder_met_bestelling.png" value="" />  </b></div>                                                                      

			<p><a href="http://www.ideal-simulator.nl"><!--www.ideal-simulator.nl--></a></p>
		</form>
				'; 
                                             
                                }

                                ?>
			
			
			
			</div>
				
					<!--<div id="bestelling"><a href="betaling.html"><img src="../images/buttons/verder_met_bestelling.png"></a></div>-->
		
		
		
		<footer>
			<p id="copyright">Copyright &copy; 2011 - rollatorstore.nl | <a class="terug_link" href="algemene_voorwaarden.html" >Algemene voorwaarden</a></p>
		</footer>
		
	</div>
</body>
</html>
	
<?php  
//echo "You ordered ". $hans=$_POST['totaal_id']; $hans .".<br />";
//echo $productnaam;
 ?>