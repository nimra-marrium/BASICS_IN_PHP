<?php

$salary = 12300;  //Initialization
if($salary<70000)  //Condition if false then no code can be runned
{
    echo "Not an good salary", "<br>";
} 

else if($salary>=70000 && $salary<120000)
{
    echo "good salary", "<br>";
}

else if($salary>120000)
{
    echo "Best salary", "<br>";
}

else
{
    echo "Unacceptable", "<br>";
}

?>