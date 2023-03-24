<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>resultado</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
	<?php
	$num1 = $_POST["numero1"];
	$num2 = $_POST["numero2"];
	$num3 = $_POST["numero3"];
	if ($num1 == $num2 && $num1 == $num3) {
		echo "<h1>Los tres números son iguales.</h1>";
	} elseif ($num1 == $num2) {
		if ($num1 > $num3) {
			echo "<h1>Los dos primeros números son iguales y son mayores que el tercero.</h1>";
		} else {
			echo "<h1>El tercer número es el mayor.</h1>";
		}
	} elseif ($num1 == $num3) {
		if ($num1 > $num2) {
			echo "<h1>El primer y tercer número son iguales y son mayores que el segundo.</h1>";
		} else {
			echo "<h1>El segundo número es el mayor.</h1>";
		}
	} elseif ($num2 == $num3) {
		if ($num2 > $num1) {
			echo "<h1>Los dos últimos números son iguales y son mayores que el primero.</h1>";
		} else {
			echo "<h1>El primer número es el mayor.</h1>";
		}
	} elseif ($num1 > $num2 && $num1 > $num3) {
		echo "<h1>El primer número es el mayor.</h1>";
	} elseif ($num2 > $num1 && $num2 > $num3) {
		echo "<h1>El segundo número es el mayor.</h1>";
	} else {
		echo "<h1>El tercer número es el mayor.</h1>";
	}
	?>
</body>

</html>