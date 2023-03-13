<?php
// 1. Write a PHP script to get the PHP version and configuration information
// phpinfo();
?>
<!-- 4  Create a simple HTML form and accept the user name and display the name through PHP echo statement. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="" method="post">
        <h2>Enter your name</h2>
        <input type="text" placeholder="Enter your Name" name="name" >
        <input type="submit" value="submit" >  
        <?php
        // store the value into a variable 
        $name = $_POST["name"];
        echo " <br>";
        echo $name;
       echo "<h1>This is the name  $name </h1>";
        ?>
    </form>
</head>
<body>    
</body>
</html>
<!-- 5. Write a PHP script to get the client IP address. -->
