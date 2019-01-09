<?php 
	$sum = 0;

	for($n=0; $n < 1000; $n++){

		if (!($n % 5) || !($n % 3) ) {
			$sum += $n;
		}
	}

	echo "La suma de los multiplos es: " . $sum;
?>