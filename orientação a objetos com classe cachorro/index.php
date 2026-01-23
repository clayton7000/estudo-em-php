<?php
	require_once 'cachorro.php';
	$cachorro = new Cachorro("Labrador", "Rex", 3);
	echo $cachorro->getNome();
	echo "<br>";
	echo $cachorro->latir();
?>