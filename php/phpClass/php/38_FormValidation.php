<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

   <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" >
     <?php //     TextFields ?>
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <br>
    <br>
    Age:<input type="integer" name="age" value="<?php echo $age; ?>">
    <br>
    <br>
    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
    <br>
    <br>
    Comment: <textarea name="comment" rows="3" cols="25"><?php echo $comment; ?></textarea>
    <br>

    <?php // Radio Buttons?>
    Gender:
    <input type="radio" name="gender" <?php if(isset($gender) && $gender)=="Male"
     echo "checked";?> value="Male">Male
    <input type="radio" name="gender" <?php if(isset($gender) && $gender)== "Female"
    echo "checked";?> value="Female">Female
    <input type="radio" name="gender" <?php if(isset($gender) && $gender)== "Other"
    echo "checked";?> value="Other">Other
    <br>
    <br>
    <input type="Submit">
   </form>

   <?php
        //Create a function to remove unneccesary chars and backslashes:test_input()
        $name=$age=$email=$comment=$gender=""; //set to empty variables

        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);

            return $data;
        }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=test_input($_POST["name"]);
            $age=test_input($_POST["age"]);
            $comment=test_input($_POST["comment"]);
            $gender=test_input($_POST["gender"]);

        }


  ?>







</body>
</html>