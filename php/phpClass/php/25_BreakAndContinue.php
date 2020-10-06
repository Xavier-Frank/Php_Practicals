<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*Break: is used to jump  out of a loop*/
        for($i=0;$i<=9;$i++){
            if($i == 5){
                break;
            }
            echo $i . "<br>";

        }
           echo "<br>";
        /*Continue: Breaks one iteration if a specified condition occurs
        and continues with the next iteration*/

        for($c=0;$c<=100;c+=10){
            if($c == 60){
                continue;
            }
            echo $c. "<br>";
        }
    ?>

</body>
</html>