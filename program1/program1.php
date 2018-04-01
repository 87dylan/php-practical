


<?php

// Create a PHP page using functions for comparing three integers and print the largest number
function largest($num1,$num2,$num3){
	
	if ($num1>$num2&&$num1>$num3)
		echo "the largest number is $num1";

	elseif ($num2>$num3&&$num2>$num1)
         echo "the largest number is $num2";
	else
		echo "the largest number is $num3";
	
}

largest(23,7,100);

?>
