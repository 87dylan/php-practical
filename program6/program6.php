/* WAP to sort an array.*/ 
<?php
echo "this is a program to sort a given array into asccending order";
$numbers=array(5,3,6,5,7,8,3,9,2,0);
for($i=0;$i<sizeof($numbers);$i++)
{
	for($j=0;$j<sizeof($numbers);$j++)
	{
		if($numbers[$j]<$numbers[$i]){
			$temp=$numbers[$j];
			$numbers[$j]=$numbers[$i];
			$numbers[$i]=$temp;

		}
	}
}
echo 'the sorted array is ';
for($k=0;$k<sizeof($numbers);$k++)
	{
		echo $numbers[$k];

		}





?>
