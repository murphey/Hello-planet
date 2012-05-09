<!DOCTYPE html>
<html>
<!--copyright Murphey Sistina-->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<link href="../styles/stijlblad_bevestiging.css" rel="stylesheet" type="text/css" />
	<title>Rollatorstore - Bevestiging</title>
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
						<div id="button_bekijkproducten"><a href="phpwinkelmandje.php"><img src="../images/buttons/bekijkproducten.png"></a></div>
						<div id="button_afrekenen"><a href="winkelmandje.php"><img src="../images/buttons/afrekenen.png"></a></div>
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
						><a href="uwgegevens.php"><img src="../images/winkelmandje/uwgegevens_button.png"></a
						><a href="betaling.php"><img src="../images/winkelmandje/betaling_button.png"></a
						><a href="bevestiging.php"><img src="../images/winkelmandje/bevestiging_button.png"></a>
					<br><br><h3>Bestelling afgerond!</h3>
					
					</div>
				
				</div>
			
				<div id="content">	
					
					<br><br>
					<div id="product_info_index"><br>
						<div id="afbeelding"><img src="../images/producten/rollz_motion_winkelmandje.png"><div class="text_winkelmandje_proces">Rollz motion<br>
						&euro; 494,10</div>
					
						<div id="text_bevestiging"><p class="text_product">De bestelling is succesvol afgerond! Uw product wordt binnen &eacute;&eacute;n werkdag bezorgd.</p>
					</div>
					
					
					
					
					
						
						
					
				
				</div>
				
				
			
			
			
			</div>
		</div>	
		
		
		
		<footer>
			<br><br><br><br><p id="copyright">Copyright &copy; 2011 - rollatorstore.nl | <a class="terug_link" href="algemene_voorwaarden.html" >Algemene voorwaarden</a></p>
		</footer>
		
	</div>

</body>
</html>
	<?php
session_start();
session_destroy();

?>
