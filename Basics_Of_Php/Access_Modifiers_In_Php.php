<?php

class prnt  //Aavailable to members of class having that specific criteria (Private Variables)
{
    private $name="Nimra";  
    private function show_name()
    {
        echo $this->name;
    }
}

class child extends prnt
{
    public function show_name()
    {
        echo $this->name;
    }
}

$obj1=new child();
$obj1->show_name();


class prnt  //Available to members of class having that specific criteria (Protected Variables)
{
    protected $name="Nimra"; 
    protected function show_name()
    {
        echo $this->name;
    }
}

class child extends prnt
{
    public function show_name()
    {
        echo $this->name;
    }
}

$obj1=new child();
$obj1->show_name();



class prnt  //Available to members of class having that specific criteria (Public Variables)
{  
    public $name="Nimra"; 
    public function show_name()
    {
        echo $this->name;
    }
}

class child extends prnt
{
    public function show_name()
    {
        echo $this->name;
    }
}

$obj1=new child();
$obj1->show_name();

?>