<!-- associative arrays are just like objects in js whre ehre have key value pairs  -->
<?php
$phone = [
    "Blade" => "652509719",
    "Dudu" => "654492560",
    "joshua" => "444555666"
];
// lets print the values of the whole array 
print_r($phone);
// display each element 
echo " <br>";
echo "This is Blade number ". $phone["Blade"]. "\n";
// to add an elemnt to the array 
$phone["Emmanuel"]="777888888";
echo " <br>";
print_r($phone);
// check if a key exists in the array 
 if(array_key_exists("Blade",$phone)){
    echo "Blade has a key ";
 }
 else{
    echo "Blade has no key ";
 }
 //get the keys of the arrays 
 $keys= array_keys($phone);
 echo " <br>";
 print_r($keys);
//  get the values of the arrays without keys 
echo " <br>";
print_r(array_values($phone));

 ;
?>