<?php
$input="My name is Virat";

$temp=substr($input,10,8);
$temp2=substr($input,7,3);

echo "<br>".$temp;
echo "<br>".$temp2;


echo "<br>".$temp."".$temp2;
echo "<br> THis is justa second code";

$tmp=explode(" ",$input);

echo "<pre>";
print_r($tmp[3]);
//echo strlen($input);

//Virat is name My
?>