<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    $int=5;
    $minValue=3;
    $maxValue=15;

    if(filter_var($int,FILTER_VALIDATE_INT,array("options" => array("min_range"=>$minValue,"max_range"=>$maxValue
    ))) === false){
        echo "Variable not within the range";
    }else{
        echo "value within the range";
    }
?>


</body>
</html>