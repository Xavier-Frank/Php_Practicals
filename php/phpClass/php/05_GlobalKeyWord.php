<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        $x=5.5;
        $y=10;

        function addition(){
            global $x,$y; /*Global function ensures that the global var are accessed within the function */
            $z=$x*$y;
            echo "The product is: " . $z;
        }
        /* executing the function returns the product showing the variables sre accessed by the function*/
        addition();


    ?>

</body>
</html>