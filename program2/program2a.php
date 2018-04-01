<?php

$no=$_GET['number'];
<h1>echo "the factorial of the number that you just entered is ";</h1>
echo fact($no);
function fact($num){
	if($num<=1){
		return $num;
	}
	else
	return $num*fact($num-1);
}

?>