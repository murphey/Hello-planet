<?php 
require 'php/mandje.php';
?>
<!DOCTYPE html>
<html> 
<!--copyright Murphey Sistina-->
<head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <link href="styles/stijlblad.css" rel="stylesheet" type="text/css" />
        <link href="styles/slide-login.css" rel="stylesheet" type="text/css"/>
        <title>Rollatorstore - Home</title>
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript" charset="utf-8"></script>

        

            <SCRIPT LANGUAGE="JavaScript">

            <!-- Begin
            // Set slideShowSpeed (milliseconds)
            var slideShowSpeed = 2500;
            // Duration of crossfade (seconds)
            var crossFadeDuration = 4;
            // Specify the image files
            var Pic = new Array();
            // to add more images, just continue
            // the pattern, adding to the array below

            Pic[0] = 'images/doelgroep_1.png'
            Pic[1] = 'images/doelgroep_2.png'
            Pic[2] = 'images/doelgroep_3.png'
            Pic[3] = 'images/doelgroep_4.png'

            // do not edit anything below this line
            var t;
            var j = 0;
            var p = Pic.length;
            var preLoad = new Array();
            for (i = 0; i < p; i++) {
            preLoad[i] = new Image();
            preLoad[i].src = Pic[i];
            } 
            function runSlideShow() {
            if (document.all) {
            document.images.SlideShow.style.filter="blendTrans(duration=2)";
            document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
            document.images.SlideShow.filters.blendTrans.Apply ();
            }
            document.images.SlideShow.src = preLoad[j].src;
            if (document.all) {
            document.images.SlideShow.filters.blendTrans.Play( );
            }
            j = j + 1;
            if (j > (p - 1)) j = 0;
            t = setTimeout('runSlideShow()', slideShowSpeed);
            }
            // End -->

	
                // standaart begin lijn
                $(document).ready(function(){ 

                // als ik op een link (a) klik functie
                $('a1').click(function(){ 
                        // klap dan (#uitklappen) uit

                        $('#uitklappen').slideToggle(); 
                        
                // sluit de click functie
                }); 

                }); // standaart afsluit lijn
                
                                // standaart begin lijn
                $(document).ready(function(){ 

                // als ik op een link (a) klik functie
                $('aa').click(function(){ 
                        // klap dan (#uitklappen) uit
                            $('#uitklappen').slideToggle(); 

                        $('#uitklappen1').slideToggle(); 
                // sluit de click functie
                }); 

                }); // standaart afsluit lijn

</script>
	
	
<!--<style>aa { cursor: help; } </style>-->
</head>

<body onLoad="runSlideShow()">
            <div id="wrapper">
            <header>
            <div id="logo">
            <a href="index.php"></a>
            </div>

            <div id="winkelmandje">    <?php// echo $_SESSION['namez'];  ?>

               
       <br/>

            <div id="winkelmandje_afbeelding"></div>
            <div id="winkelmandje_box">.<?php 

            echo '<p class="text_winkelmandje"><b>'.$_SESSION['username'].'</b></p>';     
?>
             <?php   testa();  ?>
            <?php 
           // producten() 
            ?>

            <div id="button_winkelmandje">
            <div id="button_bekijkproducten"><a href="pages/winkelmandje.php"><img src="images/buttons/bekijkproducten.png"></a></div>
            <div id="button_afrekenen"><a href="pages/winkelmandje.php"><img src="images/buttons/afrekenen.png"></a></div>
            </div>	

            </div>



            </div>
            </header>
		
            <div id="nav">
            <nav>
            <a href="index.php"><img src="images/menu/home_hover.png"></a
            ><a href="pages/producten.html"><img src="images/menu/producten.png"></a
            ><a href="pages/accessoires.html"><img src="images/menu/accessoires.png"></a
            ><a href="pages/algemene_informatie.html"><img src="images/menu/algemeneinformatie.png"></a>
            &nbsp;  &nbsp; 
            &nbsp; <a1><a href="#" class="test"><img src="images/menu/login.png" class="test"> </a> </a1>


            <div id="login-wrap">
            <div id="uitklappen">
            <div>
            <p>Login slider voor admin..</p>
            <form name="loginform" id="loginform" action="registratie/login.php" method="post">
            <p><label>Gebruikersnaam<br />
                            <input type="text" class="input" name="username" value="" size="20" />
                    </label></p>
            <p><label>Wachtwoord<br />
                            <input type="password" class="input" name="password" value="" size="20" />
                    </label></p>
            <p class="submit">
                    <input type="submit" class="submits"  value="Log me in"/></p>
           <aa href="#" class="test"><p class="test1">Registreer</a></p></aa>
            </form>
            </div>
            </div> <!-- /uitklappen -->
            </div> <!-- /login-wrap -->
            		&nbsp;
            <div id="login-wrap1"> 
            <div id="uitklappen1">
            <div>
            <aa >Registreren</aa>
            <form name="loginform1" id="loginform1" action="registratie/registration.php" method="post">
                            <p><label>Naam<br />
                            <input type="text" class="input1" name ="naam" value="<?php echo $naam; ?>" size="20" />
                    </label></p>                         
                    <p><label>gebruikersnaam<br />
                            <input type="text" class="input1" name="username" value="<?php echo $gebruikersnaam; ?>" size="20" />
                    </label></p>

                            <p><label>email<br />
                            <input type="text" class="input1" name="email" value="<?php echo $email; ?>" size="20" />
                    </label></p>
                                        <p><label>Adres<br />
                            <input type="text" class="input1" name="adres" value="<?php echo $adres; ?>" size="20" />
                    </label></p>
                    <p><label>Postcode<br />
                            <input type="text" class="input1" name="postcode" value="<?php echo $postcode; ?>" size="20" />
                    </label></p>

 
                    <p><label>Wachtwoord<br />
                            <input type="password" class="input1" name="password" size="20" />
                    </label></p>
                     <p><label>Herhaal je wachtwoord:<br/>
            <input type='password' name="repaitpassword"  size="20"> 
                    </label></p>
                    
                    <p class="submit1">

                                  <input type='submit' name="submit" value='Registreren'>
                    </p>
            </form>
            </div>
            </div> <!-- /uitklappen -->
            </div> <!-- /login-wrap -->
            &nbsp;
            </nav>


 
            </div>

		<a href="pages/producten.html" ><div id="attention">
			<div id="button_attention">
				<img src="images/buttons/button_attention.png">
			</div>
		</div></a>
		
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
		</div>
		
		<div id="doelgroep">
			<img src="doelgroep_1.png" name="SlideShow" >
		</div>
		
		<div id="contact">
				<div id="contact_text"></div>
				<div id="klantenservice_tekst"><b>Klantenservice</b> +31 (0) 20 17 870 35</div>
				<a href="pages/formulier.html" ><div id="button_klantenservice"></div></a>
		</div>
			
		
		
		
		
		<footer class="foot"> 
			<p id="copyright">Copyright &copy; 2012 - rollatorstore.nl | <a class="terug_link" href="pages/algemene_voorwaarden.html" >Algemene voorwaarden</a></p>
		</footer>
		
	</div>

</body>
</html>
	
<?php

include "php/connect.php";
//include "php/registratie.php";
?>
