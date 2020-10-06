<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        //Casting: Converting a value into another data type
        //(int),(integer),intval() : used for casting

        #Cast String to int
        $x="23455677.985";
        $casted_val = (int)$x;
        echo $casted_val;

        echo "<br>";

        #Cast float to int
        $y=43893.409;
        $int_val=(int)$y;
        echo $int_val;
    ?>

</body>
</html>