<?php

	// Set default timezone for DATE/TIME functions
	if(function_exists('date_default_timezone_set'))
	{
		date_default_timezone_set('Europe/Amsterdam');
	}

	include(dirname(__FILE__) . '/library/ideallite.cls.php');

	$sOrderId = (empty($_POST['order_id']) ? '' : $_POST['order_id']);
	$sOrderDescription = (empty($_POST['order_description']) ? '' : $_POST['order_description']); // Upto 32 characters
	$fOrderAmount = floatval(empty($_POST['order_amount']) ? '' : str_replace(',', '.', $_POST['order_amount'])); 

	$oIdeal = new IdealLite();

	$sCurrentUrl = strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0, strpos($_SERVER['SERVER_PROTOCOL'], '/')) . '://' . $_SERVER['SERVER_NAME'] . '/') . substr($_SERVER['SCRIPT_NAME'], 1);
	$sReturnUrl = substr($sCurrentUrl, 0, strrpos($sCurrentUrl, '/') + 1) . '../step3.php'; // ../step3.php was oorspronkelijk step3.php dus die andere zal niet werken 

	// Set shop details
	$oIdeal->setUrlCancel($sReturnUrl . '?ideal[order]=' . urlencode($sOrderId) . '&ideal[status]=cancel');
	$oIdeal->setUrlError($sReturnUrl . '?ideal[order]=' . urlencode($sOrderId) . '&ideal[status]=error');
	$oIdeal->setUrlSuccess($sReturnUrl . '?ideal[order]=' . urlencode($sOrderId) . '&ideal[status]=success');

	// Set order details
	$oIdeal->setAmount($fOrderAmount);
	$oIdeal->setOrderId($sOrderId);
	$oIdeal->setOrderDescription($sOrderDescription);

	// Customize submit button
	$oIdeal->setButton('Betalen met iDEAL');


	// Generate form
	echo '<p><!---Uw bestelling afrekenen!--></p>' . $oIdeal->createForm();

?>
<p><!--<a href="http://www.ideal-simulator.nl" target="_blank">http://www.ideal-simulator.nl</a>--></p>