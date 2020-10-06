<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        declare(strict_types=1); /*strict requirement does not allow mismatch in variables*/

        function addNum(float $a,float $b ):float{
            return $a + $b;
        }
        echo addNum(1.7,5.6);

        /*U can specify a different return type then the arguments
         but make sure the return type is correct*/
         function addNumbers(float $c,float $v):int{

            return (int)($c + $v); //type casting
         }
         echo addNumbers(1.5,7.8);
    ?>

</body>
</html>