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