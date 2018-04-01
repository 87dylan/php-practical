<?php

$text=$_GET['something'];
echo "the reverse of the strin $text is ";
for($i=strlen($text);$i>=0;$i--){

echo $text[$i];

}





?>