<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    /*Removes chars with ascii value greater than 127*/
    $str="<h3> Hi Xavier .?''#!&</h3>";

    $newstr= filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
?>


</body>
</html>