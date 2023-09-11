<?php

$name = ["Sidra", "Saliha", "Aqsa", "Kashmala", "Ansa"];  //Single Dimension Index Array

for($i=0; $i<count($name); $i++)
{
    echo "<pre>";
    echo  "$i"+1, ") ",$name [$i], "<br>"; 
    echo "<pre>";
}

echo "<br>";  //Line Break

print_r($name);        

echo "<br>"; //Line Break

for($i=0; $i<5; $i++)
{
    echo "<pre>";
    echo  "$i"+1, ") ",$name [$i], "<br>"; 
    echo "<pre>";
}

$stu1 = array //Single Dimension Associative Array
(
    "Name" => "Sidra",
    "Age" => 19,
    "Interest" => "Writing",
    "Major" => "Psychology",
);

$stu2 = array
(
    "Name" => "Saliha",
    "Age" => 19,
    "Interest" => "Web Development",
    "Major" => "Software Engineering",
);

$stu3 = array
(
    "Name" => "Aqsa",
    "Age" => 21,
    "Interest" => "Singing",
    "Major" => "Pharmacy",
);

$stu4 = array
(
    "Name" => "Zahayra",
    "Age" => 20,
    "Interest" => "Accounting",
    "Major" => "Accounting and Finance",
);

$stu5 = array
(
    "Name" => "Ayesha",
    "Age" => 22,
    "Interest" => "Debate",
    "Major" => "International Relations",
);

echo "<pre>";
print_r($stu1);
print_r($stu2);
print_r($stu3);
print_r($stu4);
print_r($stu5);
echo "<pre>";

$stu_data = array  //Multi Dimension Associative Array
(
    "Sidra" => array
    (
        "Age" => 19,
        "Interest" => "Writing",
        "Major" => "Psychology", 
    ),
    "Saliha" => array
    (
        "Age" => 19,
        "Interest" => "Web Development",
        "Major" => "Software Engineering",
    ),
    "Aqsa" => array
    (
        "Age" => 21,
        "Interest" => "Singing",
        "Major" => "Pharmacy", 
    ),
    "Zahayra" => array
    (
        "Age" => 20,
        "Interest" => "Accounting",
        "Major" => "Accounting and Finance",
    ),
    "Ayesha" => array
    (
        "Age" => 22,
        "Interest" => "Debate",
        "Major" => "International Relations",
    ),
);

echo "<pre>";
print_r($stu_data["Sidra"]);
echo "<pre>";

echo "<pre>";
print_r($stu_data["Saliha"]);
echo "<pre>";

echo "<pre>";
print_r($stu_data["Aqsa"]);
echo "<pre>";

echo "<pre>";
print_r($st_data["Zahayra"]);
echo "<pre>";

echo "<pre>";
print_r($st_data["Ayesha"]);
echo "<pre>";

?>