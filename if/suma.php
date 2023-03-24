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
	$num4= $_POST['numero4'];
	$suma1= $num1 + $num2;
	$suma2= $num3 +$num4;
	if ($suma1>$suma2) {
		echo '<h1>La suma uno es mayor con el resuldado de: '. $suma1 . '</h1>';
	}elseif ($suma1<$suma2) {
		echo '<h1>La suma dos es mayor con el resuldado de: ' . $suma2 . '</h1>';
		
	}else{
		echo '<h1>Las dos sumas son iguales.</h1>';
	}

	?>
</body>

</html>