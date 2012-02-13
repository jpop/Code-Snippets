<?php

	$errors = array();

	$required = array(
	
		"name" => "Your name is required",
		"email" => "Your email address is required",
		"comments" => "A comment is required"
	
	);
	
	foreach($required as $key=>$msg) {
	
		if(trim($_POST[$key]) == "") {
		
			$errors[] = $msg;
		
		}
	
	}
	
	if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		
		$errors[] = "That email address appears to be invalid";  
		
	}
	
	if(empty($errors)) {
	
		echo "OK";  exit;
	
	} else {
	
		$errors = implode("<br />", $errors);
		echo $errors;
		exit;
	
	}

?>