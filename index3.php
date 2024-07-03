<?php
print "Arun And Chthuni<br>";

class MyClass
{
    public $name;
    public $age;
    public $Subjet;
    public $marks;

    function __construct($inname,$inage,$insubject,$inmarks)
    {
        $this->name = $inname;
        $this->age = $inage;
        $this->Subject = $insubject;
        $this ->marks = $inmarks;

    } 

     function getName()
    {
        print $this -> name;  
        print $this->age;
        print $this->Subject; 
        print $this->marks;
    }

    function setName($newName)
    {
        $this->name = $newName;
    }

    function setSubject($newSubject)
    {
        $this->Subject = $newSubject;
    }
}

$Aruna = new MyClass("Aruna",21,"Maths",70);

$Aruna->setName("Chathuni");
$Aruna->setSubject("Science");

print $Aruna ->getName();

?>
