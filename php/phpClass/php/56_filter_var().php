<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*filter_var() : validates and sanitize data*/
        /*Take two variables : 1. variable to be checked 2. type of check to use */

        #. Sanitize a String

        $str= "<h1>Hello World! </h1>";
        //removing html tags from the string
        $newstr= filter_var($str,FILTER_SANITIZE_STRING);
        echo $newstr;

        #. Validate an integer
        echo "<br>";
        $int = 100;

        if(!filter_var($int,FILTER_VALIDATE_INT) === false){
            echo "integer is valid";
        }else{
            echo "integer is not valid";
        }
        echo "<br>";
        /*In the above eg if int was set to zero it will return int is not valid
        to correct it add the code below*/
//         $int1 = 0;
//
//         if(!filter_var($int1,FILTER_VALIDATE_INT) === false || filter_var($int1,FILTER_VALIDATE_INT)=== 0 {
//           echo "integer is valid";
//         }else{
//            echo "integer is not valid";
//         }

    ?>


</body>
</html>