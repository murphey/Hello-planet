<?php

	/*
		Merk op dat deze URL ook handmatig kan worden aangeroepen. 

		Er kunnen dus geen garanties worden gegeven dat de transactie werkelijk
		is gefaald (maar het is wel aannemelijk). Controleer daarom ALTIJD uw 
		transacties via het Ideal Dashboard!
	*/

	$order = isset($_GET['ideal']['order']) ? $_GET['ideal']['order'] : '0';
	$status = isset($_GET['ideal']['status']) ? $_GET['ideal']['status'] : '';

	if(strcmp($status, 'cancel') === 0)
	{
		// Notify user
		echo '<h1>Transactie geannuleerd.</h1><p>U heeft de betaling van bestelling #' . $order . ' met iDEAL afgebroken.</p>';
	}
	elseif(strcmp($status, 'error') === 0)
	{
		// Notify user
		echo '<h1>Transactie fout.</h1><p>Betalen met iDEAL is nu niet mogelijk. Probeer het later opnieuw of betaal op een andere manier.<br>Als u in uw Internetbankieren ziet dat de betaling van uw bestelling #' . $order . ' heeft plaatsgevonden, zullen wij zodra wij hiervan de bevestiging ontvangen tot levering overgaan.</p>';
	}
	elseif(strcmp($status, 'success') === 0)
	{
		// Notify user
		echo '<h1>Transactie geslaagd.</h1><p>Uw betaling van bestelling #' . $order . ' met iDEAL is geslaagd.</p>';
	}
	else
	{
		// Notify user
		echo '<h1>Transactie fout.</h1><p>De status van uw iDEAL betaling van bestelling #' . $order . ' is onbekend.</p>';
	}
header ( "refresh: 3; pages/bevestiging.php");
?>
<p><a href="pages/bevestiging.php">Terug naar webshop</a></p> 
<p><a href="http://www.ideal-simulator.nl" target="_blank"><!---http://www.ideal-simulator.nl--></a></p>
