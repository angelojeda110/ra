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
	if ($num1>$num2) {
		echo '<h1>El número mayor es: ' . $num1 . '</h1>';
	}elseif ($num1<$num2) {
		echo '<h1>El número mayor es: ' . $num2 . '</h1>';
		
	}else{
		echo '<h1>Los dos números son iguales.</h1>';
	}

	?>
</body>

</html>