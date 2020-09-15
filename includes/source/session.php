<?php
	//Start session when login
	session_start();
	//If is the default language of the browser is English set
	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "en";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		//Add English language file
		if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		//Add Arabic language file
		else if ($_GET['lang'] == "ar")
			$_SESSION['lang'] = "ar";
	}
	//Look in the following languages folder
	require_once "../includes/lang/" . $_SESSION['lang'] . ".php";
?>