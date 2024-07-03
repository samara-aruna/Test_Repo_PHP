<?php


$array = [1,2,3,4,5,6,7];
print $array[1] . "<br/>";


for($i=0;$i<count($array);$i++)
{
    print $array[$i];
}
print"<br>";


print max($array);

function name($fname,$lname)
{
    print "<br> $fname  $lname";
}

name("Aruna","Samarasinghe");

function Agei($age)
{
    return $age;
}

$Age = Agei("21"); 

print "<br>".$Age;
?>