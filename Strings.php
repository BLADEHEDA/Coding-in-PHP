<?php
//lets dive ino strings 
$name = "yaya";
echo "hello $name";
// string concatenation is done with fullstop (.) inste of plus (+)in javascript and other languages 
$name2= "Blade";
echo"<br>";
echo"$name teaches code well "." $name2 understand him vwry well";
//splitting and strings 
$nums= "one,two,three";
$numsplit= explode(",",$nums);
echo"<br>";
print_r($numsplit);
// join strings
$fruit_list = ["apple","banana","orange"];
$fruits = implode(",", $fruit_list);
echo"<br>";
echo "The fruits are $fruits";
echo"<br>";
?>
