<?php
require 'flight/Flight.php';
require 'extensions/Bcrypt.php';

// Register Bcrypt class to use later on
Flight::register('bcrypt', 'Bcrypt');

Flight::route('GET /', function() {
	Flight::render('index.php', array('hashResult' => 'Waiting...'));
});

Flight::route('POST /', function() {
	$bcrypt = Flight::bcrypt();
	$hashResult = '';
	$hashMatches = '';
	$hashCheck = false;
	switch ($_POST['method']) {
		case 'hash':
			$hashResult = $bcrypt->hash($_POST['stringToHash']);
			break;
		case 'check':
			$hashMatches = $bcrypt->check($_POST['plainText'], $_POST['hashText']);
			$hashCheck = true;
			break;
	}
	Flight::render('index.php', array('hashResult' => $hashResult, 'hashMatches' => $hashMatches, 'hashCheck' => $hashCheck));
});

Flight::start();
?>
