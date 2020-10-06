<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*Loop thro' an indexed array*/
        $cars=array("BMW","Jeep","Mazda","Toyota","Hyundai","MacX");
        $arrLength = count($cars);

        for($x=0;$x<$arrLength;$x++){
            echo $cars[$x] . "<br>";
        }
    ?>

</body>
</html>