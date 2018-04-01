<?php

$text=$_GET['msg'];

echo "this funtion will check if a string is all lower case";
check($text);
function check($messege){
$count==0;
for($i=0;$i<strlen($messege);$i++){
if(ctype_lower($messege[$i]))
{	$count++;
	continue;
    }
else
{	echo "the messege you typed doesnt have all lower case letters";
	break;
}
}
if($count==strlen($messege))
	echo "the messege you typed got all lower case letters";

}



?>