<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*A 2D Array is an array of arrays*/
        /*A 3D Array is an array of arrays of arrays*/

        $cars=array(array("Volvo",22,17),
                    array("BMW",18,15),
                    array("Jeep",8,3),
                    array("Mazda",25,20)
                    );

        echo $cars[1][0]. ": in stock = " . $cars[1][1] . ", and sold = " . $cars[1][2];

    ?>

</body>
</html>