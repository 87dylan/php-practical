<?php 

$no=$_GET['number'];
prime($no);
function prime($num){

if($num%$num/2!=0||$num==2)
	echo 'the number you entered is not prime';
	else
echo "the number you entered is prime";



}




?>