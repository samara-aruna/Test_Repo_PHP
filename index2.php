<?php

print "Aruna SAmarasinghe <br>";

class Cat
{
    public $name;
    public $age;
    public $color;

    function __construct($inname, $inage, $incolor)
    {
        $this -> name = $inname;
        $this -> age = $inage;
        $this -> color = $incolor;
    }

    function printname()
    {
        print $this->name;
        print $this -> age;
        print $this ->color;
    }

    // public function getname()
    // {
    //     return $this -> name;
    // }
}

$cat1 = new Cat("Fluffy <br>", 2, "<br>white");
$cat2 = new Cat("Smokey", 4, "black");
$cat3 = new Cat("Misty", 3, "white and black");

//print $cat1 -> getname();
echo $cat1 -> printname();
print $cat2 -> printname();

class SLdogs extends Cat
{
    public $runFast;

    function __construct($inaname,$inage,$incolor,$inrunfast)
    {
        $this ->runFast = $inrunfast;
        parent::__construct($inaname,$inage,$incolor);
    }
}

$cat3 = new SLdogs("Fluffy", 2, "white", "yes");

print $cat3->runFast;
print $cat3->name;

?>