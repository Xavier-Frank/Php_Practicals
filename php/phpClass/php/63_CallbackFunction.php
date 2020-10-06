<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    /*Call back function is a function which is passed as an argument inside another function
    To use a function as a callback function pass a string containing the name of the function
    as an argument of another function*/
    function callback_fxn(){
        return strlen($item);
    }
    $strings = ["orange","apple","mango","ovacado"];
    $lengths = array_map("callback_fxn",$strings);
    print_r($lengths);

?>


</body>
</html>