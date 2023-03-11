
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 
    <!-- write the logic to validate the form  -->
    <?php
    // define the initials for the variables of the form 
       $name = $email = $feedback = "" ; 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        // $email = test_input($_POST["email"]);
        $email = test_input($_POST["email"]);
        $feedback = test_input($_POST["feedback"]);
      }
    
    // create a function to text the nature of the input 
    function test_input($data){
        // ?check if the word had space before and after , backslashes and special chaharacters
        $data = trim($data);
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

<h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
            <input type="text" name="email" placeholder="Enter your Email" class="name">
        </div>
        <div class="div-feedback">
        <div>
            <label for="feedback">Feedback</label>
          </div>
            <input type="text"  name="feedback" placeholder="Enter yur Feedback" class="name">
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo $feedback;
    ?>

</body>

</html>