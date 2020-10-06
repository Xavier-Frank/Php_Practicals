<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

   <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
     <?php //     TextFields ?>
    Name: <input type="text" name="name">
    <span class="error"> * <?php echo $nameErr ?> </span>
    <br>
    <br>
    Age:<input type="integer" name="age">
    <span class="error"> * <?php echo $ageErr?> </span>
    <br>
    <br>
    E-mail: <input type="text" name="email">
    <span class="error"> * <?php echo $emailErr?> </span>
    <br>
    <br>
    Comment: <textarea name="comment" rows="3" cols="25"> </textarea>
    <br>

    <?php // Radio Buttons?>
    Gender:
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Other">Other
    <span class="error"> * <?php echo $genderErr?> </span>
    <br>
    <br>
    <input type="Submit">
   </form>

   <?php
        //Create a function to remove unnecessary chars and backslashes:test_input()
        $name=$age=$email=$comment=$gender=""; //set to empty variables
         $nameErr=$ageErr=$emailErr=$commentErr=$genderErr="";

        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);

            return $data;
        }

         //Check and validate the required fields
         if(_SERVER["REQUEST_METHOD"]=="POST"){
//                if(empty($_POST["name"]){
//                    $nameErr="Name is required";
//                }
//                 else{
//                    $name=test_input($_POST["name"]);
//                }
         }

//              if(empty($_POST["age"]){
//                 $ageErr="Age is required";
//             } else{
//                 $age=test_input($_POST["age"]);
//             }
//             if(empty($_POST["email"]){
//                 $emailErr="email required";
//             }else{
//                  $email=test_input($_POST["email"]);
//             }
//             if(empty($_POST["gender"]){
//                 $genderErr="gender is required"
//             }else{
//                 $gender=test_input($_POST["gender"]);
//             }
//         }

   ?>







</body>
</html>