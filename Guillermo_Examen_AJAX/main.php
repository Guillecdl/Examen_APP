<?php 
	require_once('DBManager.php');

	if (isset($_GET['quote']) && $_GET['quote'] != ""){
		getSentence($_GET['quote']);
	}
	else{
		echo '[NO VALUE INSERT]';
	}

?>