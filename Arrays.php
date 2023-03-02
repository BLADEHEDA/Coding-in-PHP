<?php
//Arrays in PHP . We have 3 types of arrays in PHP which are simple arays, Associative arrays and multimensional arrays 
// simple arraays
$number_arr=[1,2,3,4,5,];
echo $number_arr[1]."<br>";
var_dump($number_arr)."<br>"."<br>"; //displays the arrays and its indexes 
// alternatively , arrays can be displayed as follows 
$fruits = array("pawpaw","guava","mabgo","pineapple");
echo $fruits[2]."<br>";

// associative arrays . just like objects in javascript ,takes key value pairs in php 
$person=[
"firstname"=> "Blade Heda",
"lastname"=> "Dudu Business",
"profession" => "fullstack developer"
];
echo $person["lastname"].'<br>';
var_dump($person).'<br>';

// multidimensional arrays 
$people=[
   [ "firstname"=> "Blade ",
    "lastname"=> "Dudu ",
    "profession" => "fullstack developer"],
    [ "firstname"=> " Heda",
    "lastname"=> "Business",
    "profession" => "mobile developer"],
    [ "firstname"=> "Blade Heda",
    "lastname"=> "Dudu Business",
    "profession" => "fullstack developer"]
    ];
    echo $pople[0]["profession"];
?>