<?php require '../php/mandje.php'; 
?>
<!DOCTYPE html>
<html>
<!--copyright Murphey Sistina-->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<style type="text/css"> ul.mytabs{ background:#BFCBF4; border-radius:8px;}  li.current{background:#0066FF ;  border-radius:3px;} current A{background:#ff8000; }</style>
    <link rel="stylesheet" href="jav/main.css" />
    <script type="text/javascript" src="jav/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="jav/main.js"></script>
	<link href="../styles/stijlblad_product.css" rel="stylesheet" type="text/css" />
	<title>Rollatorstore - Active light</title>
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
					<p class="text_winkelmandje">U heeft <b>0 product(en)</b> in uw winkelmandje<br>Totaal <b>&euro; 0,00</b></p>
				
					
					<div id="button_winkelmandje">
						<div id="button_bekijkproducten"><a href="winkelmandje.php"><img src="../images/buttons/bekijkproducten.png"></a></div>
						<div id="button_afrekenen"><a href="winkelmandje.php"><img src="../images/buttons/afrekenen.png"></a></div>
					</div>	
					
				</div>
				
				
				
			</div>
		</header>
		
		<div id="nav">
			<nav>
				<a href="../index.php"><img src="../images/menu/home.png"></a
				><a href="producten.html"><img src="../images/menu/producten_hover.png"></a
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
				<a class="terug_link" href="producten.html"> &laquo;  Terug naar productenoverzicht</a><br>
				                                          <?php
                                                                //producten($_GET['id']); 

 
                                                     ?>
				<div id="product_info">
					<h2>Rollator Topro Troja 2G</h2>
					<p class="text_product">De Topro Troja is geschikt voor zeer regelmatig gebruik, zowel binnen als buiten. 
					De Troja is een lichtgewicht rollator die u met een handbeweging opvouwt tot een handzaam pakketje, 
					waarna u hem eenvoudig meeneemt in de bus, auto of taxi.
					Deze rollator is niet voor niets tweede geworden in de Kassa rollatortest 2012!</p>

				
				</div>
			
				<aside>
					<div id="product_foto_tropotroja">
					</div>
					<div id="prijs"><img src="../images/producten/tropotroja-price.gif"></a></div>
					<p class="text_product">Uw voordeel: <b>10%</b></p><br>
					
					
					<a href="winkelmandje.php"><div id="button_toevoegen_winkelmandje"></div></a>
				
				</aside>
				
				
				
			
			
			
			</div>
		</div>	
		
						    <div id="producten">
        <ul class="mytabs" id="tabs">
           <!-- <li class="current"><a href="./tabs/tab-2.html">Tab 2</a></li>
            <!--<li><a href="./tabs/tab-3.html">Tab 3</a></li>-->
			<li class="help"><a href="jav/tropotroja/eigenschappen.html">Specificaties</a></li>
			<li><a href="jav/tropotroja/tropotroja.php?id=50">Beschrijving</a></li>
			<li><a href="jav/tropotroja/testie.html">Afbeeldingen</a></li>    
			

        </ul>
        <div class="mytabs-container" id="tabs-container">
            <h3>Loading. Wacht A.U.B.....</h3>
        </div> 
    </div> 
		
		
		<footer>
			<p id="copyright">Copyright &copy; 2011 - rollatorstore.nl | <a class="terug_link" href="algemene_voorwaarden.html" >Algemene voorwaarden</a></p>
		</footer>
		
	</div>

</body>
</html>
	
