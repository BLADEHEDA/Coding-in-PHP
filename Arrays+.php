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
// we use the array_merge to concatebate the elemnts of an  multipke arrays 
$evenNUms= [2,4,6,8,10];
$mergedNum = array_merge($oddNums,$evenNUms);
echo " <br>";
print_r($mergedNum);
echo " <br>";
$numbers = [1,2,3,4,5,6];
print_r(array_slice($numbers, 3, 2));
echo " <br>";
$numbers = [1,2,3,4,5,6];
print_r(array_splice($numbers, 3, 2));
print_r($numbers);


?>