<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- write the logic to validate the form  -->
    <?php
    // define the initials for the variables of the form 
    $name= $email = $Feedback = " " ; 
    // create a function to text the nature of the input 
    function testData($data){
        // ?check if the word had space before and after , backslashes and special chaharacters
        $data = trim($data);
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }
  if ($_SERVER["REQUEST METHOD"]=="POST"){
    $name= testData($_POST["name"]);
    $email = testData(($_POST["email"]));
    $Feedback = testData($_POST("feedback"));
  }

    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP SELF"]); ?>    ">
        <div class="div-name">
            <div>
            <label for="name">Name</label>
            </div>
            <input type="text" name="name" placeholder="Enter your name" class="name">
        </div>
        <div class="div-email">
        <div>
            <label for="email">Email</label>
        </div>
            <input type="email" name="email" placeholder="Enter your Email" class="name">
        </div>
        <div class="div-feedback">
        <div>
            <label for="feedback">Feedback</label>
          </div>
            <input type="text name  feedback" placeholder="Enter yur Feedback" class="name">
        </div>
    <button>Send </button>
    </form>

</body>

</html>