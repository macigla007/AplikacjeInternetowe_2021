<html>
<head>
	<title>Glanus</title>
</head>
<body>

Hello world :P

<?php

$a = 5;
$b = 1;
$c = 2;

$delta = $b*$b - 4*($a*$c);

//print("Delta " . $delta);

if($delta > 0){
	$x1= (sqrt($delta) - $b) / (2*$a);
	$x1= (sqrt($delta) - $b) / (2*$a);
	$x2= (-sqrt($delta) - $b) / (2*$a);
	print("Delta=" .$delta . " zatem x1=" .$x1. " x2=".$x2);
}else{
	if($delta == 0){
		$x1= (sqrt($delta) - $b) / (2*$a);
		echo "Delta równa 0, zatem x=" .$x1;
	}else {
		echo "Brak rozwiązań rzeczywistych";
	}
}


?>

</body>
</html>