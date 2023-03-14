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
// $counter = 0;

// while ($counter < 10) {
//     $counter += 1;

//     if ($counter % 2 == 0) {
//         echo "Skipping number $counter because it is even.\n";
//         continue;
//     }

//     echo "Executing - counter is $counter.\n";
// }


?>