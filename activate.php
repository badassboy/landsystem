<?php 

include("rest_api.php");
$api = new Application();


if (isset($_GET['token'])) {

	$token = $_GET['token'];
	$activated = $api->verification($token);
	if ($activated) {
		echo "true";
		sleep(5);

		// redirect to the login page after successful account activation
		header("Location: index.php");
		exit;


	}else {
		echo "false";
	}




	
}






?>