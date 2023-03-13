<?php
// lets have  a taste of multidimensional arrays 
$multi_arr=[
    [1,2,3],
    [2,4,6],
    [7,10,12]
];
print_r($multi_arr);
echo"<br>";
print_r($multi_arr[0]);


?>
<!-- sum the various array elements -->
<?php

$matrix = [ 
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

foreach ($matrix as $numbers) {
    $sum = 0;

    // TODO: Write you'r code here.
    foreach($numbers as $numbers){
        $sum=$sum+$numbers;
    };

    echo "{$sum}\n";
}

?>