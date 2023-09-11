<?php

$a = "Nimra";
$b = "Marrium";
echo $a, " " ,$b ,"<br>";

$salary = 10000; //For Non-Constant Vriables
$salary = 20000;
$salary = 30000;
$salary = 40000;

echo $salary ,"<br>";

define("uni","air"); //For Constant Variables
define("UNI","AIR");

echo uni, "<br>";
echo UNI, "<br>";

define("name", "Nimra", true);
echo NAME;

?>