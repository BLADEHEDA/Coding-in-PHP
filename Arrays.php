<?php
//Arrays in PHP . We have 3 types of arrays in PHP which are simple arays, Associative arrays and multimensional arrays 
// simple arraays
$number_arr=[1,2,3,4,5,];
echo $number_arr[1];
var_dump($number_arr); //displays the arrays and its indexes 
// alternatively , arrays can be displayed as follows 
$fruits = array("pawpaw","guava","mabgo","pineapple");
echo $fruits[2];

// associative arrays . just like objects in javascript ,takes key value pairs in php 
$person=[
"firstname"=> "Blade Heda",
"lastname"=> "Dudu Business",
"profession" => "fullstack developer"
];
echo $person["lastname"];
var_dump($person);

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