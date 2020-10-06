<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    #JSON: Javascript Object Notation : Syntax for storing and accepting data
    /*Since it is a text-based format it can easily be sent to and from a server and used
    as a data format by any programming language */

    // Inbuilt functions: json_encode(),,,,json_decode()

    # PHP - json_encode()
    /*Used to encode a value to json format*/

    #e.g. encode an associative array into a JSON object
    $age = array ("Peter"=>35, "Ben"=> 37 ,"Joe"=>24);

    echo json_encode($age);

    #PhP - json_decode()
    /*Used to decode a json object into a php object or a associative array*/
    $jsonobj = '{"Peter":33,"Ben":64,"Joe":24}';
    var_dump(json_decode($jsonobj));

?>


</body>
</html>