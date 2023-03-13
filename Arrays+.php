<?php
// alternate ways to get the end of and array 
$oddNums = [1,3,5,7,9];
// echo $oddNums;
print_r($oddNums);
 $beginning = reset($oddNums); //get the first element of the array 
 echo" <br>";
;echo $beginning;
$last = end($oddNums);
echo" <br>";
echo $last;

?>