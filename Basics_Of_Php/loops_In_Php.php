<?php

$name = "Nimra";  //For Loop (Increment)
for($i=0; $i<10; $i++)
{
    echo "$i"+1 , ") ", $name, "<br>";
}

$name = "Nimra";  //For Loop (Decrement)
for($i=10; $i>0; $i--)
{
    echo "$i"-1, ") ", $name, "<br>";
}

$name = "Nimra"; //While Loop
$i = 0; 
while( $i>0)
{
    echo "$i"+1, ") ", $name, "<br>";
    $name++;
}

?>