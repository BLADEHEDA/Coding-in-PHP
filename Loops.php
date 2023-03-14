<?php
// Aglimse at for loops 
$even_numbers = [2,4,6,8,10,12,14,16,18,20];
for($i=0;$i<count($even_numbers);$i++){
    echo"$i"."<br>";
}
?>
<?php
//A glimse at for each loops
$even_numbers = [2,4,6,8,10,12,14,16,18,20];
foreach ($even_numbers as $even_number) {
  echo $even_number . "\n";
}
?>
<?php
// while loops 
$counter = 0;
while($counter<10){
  $counter+=1;
  
  echo"<br>";
  echo $counter;
};
echo "printing out";
echo"<br>";
$number= 0;
while($number<10){
  $number+=1;
  if($number%2==0){
    echo "skipping the number $number bcs is even "."<br>";
    continue;
  }
  echo "printing out $number"."<br>";
}
?>
<?php
// this section is for while loops exerciese Use a while loop to print all odd numbers in an array. Use the continue statement to skip loops and avoid printing even numbers.
$numbers = [56, 65, 26, 86, 66, 34, 78, 74, 6];
for($i=0; $i<count($numbers);$i++){
if($numbers[$i]%2==0){
  continue;
  echo "the number is $numbers[$i] even"."<br>";  
}
else {
  echo "the number is $numbers[$i] odd"."<br>";
}
}
?>

<?php
echo "<br>";
// this section is for while loops exerciese Use a while loop to print all odd numbers in an array. Use the continue statement to skip loops and avoid printing even numbers.
$numbers = [56, 65, 26, 86, 66, 34, 78, 74, 67, 18, 34, 73, 45, 67, 75, 10, 60, 80, 74, 16, 86, 34, 12, 23, 42, 72, 36, 3, 73, 9, 92, 81, 94, 54, 97, 74, 45, 55, 70, 94, 96, 81, 86, 86, 84, 4, 32, 8, 96, 86, 87, 18, 84, 87, 59, 48, 32, 90, 17, 22, 82, 79, 66, 28, 17, 14, 80, 83, 66, 36, 21, 89, 68, 2, 51, 65, 20, 87, 48, 5, 1, 16, 60, 53, 84, 90, 16, 2, 37, 73, 57, 70, 57, 69, 68, 1, 24, 40, 72, 97];
// rewrite the code in a while loo
$index= 0;
while($index< count($numbers)){
  $index+=1;
  if($numbers[$index]%2==0){    
    continue;
    echo "the number is $numbers[$index] even"."<br>";  
  }
  else{
    echo " The number $numbers[$index] is an odd number "."<br>";
  }
}
?>