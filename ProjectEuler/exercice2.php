<?php

$sum = 0;
$fibonacci = 1;
$num1 = 0;
$num2 = 1;

while ($fibonacci < 4000000) {
	$fibonacci = $num1 + $num2;
	$num1 = $num2;
	$num2 = $fibonacci;
	
	echo $fibonacci . " ";

	if ($fibonacci % 2 == 0) {
		$sum += $fibonacci;
	}
}

echo "<p>The sum of the fibonaci pairs numbers is: $sum </p>";

?>