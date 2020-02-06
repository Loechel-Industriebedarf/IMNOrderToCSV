<?php
	$api_key = "69426942-6942-6942-6942-694269426942";
	$merch_code = "NANI2";
	
	$csvPath = "../orders.csv";
	$dateTimePath = "last.txt";
	
	date_default_timezone_set('Europe/Berlin');
	
	$lastDate = file_get_contents($dateTimePath); //Last time the program did something
	$currentDate = $date = date("c"); //Current datetime in ISO 8601