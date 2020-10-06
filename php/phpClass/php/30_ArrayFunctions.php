<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        $cars=array("BMW","Jeep","Mazda","Toyota","Hyundai","MacX");
        # Number of elements
        echo count($cars) . "<br>";

        # Change case
        echo array_change_key_case($cars). "<br>";

        # Delete the last element of an array
        echo array_pop($cars). "<br>";



    ?>

</body>
</html>