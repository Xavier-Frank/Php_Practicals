<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    #accesing the values from a php object
    $jsonobj = '{"Peter":33,"Ben":64,"Joe":24}';
    $obj=json_decode($jsonobj);

    echo $obj->Peter;
    echo $obj->Ben;

    #From an associative array
    $jsonobj = '{"Peter":33,"Ben":64,"Joe":24}';
    $arr=json_decode($jsonobj,true);

    echo $arr["Peter"];
    echo $arr["Ben"];

    #Looping thro' each value
     $jsonobj = '{"Peter":33,"Ben":64,"Joe":24}';
     $obj=json_decode($jsonobj);

     foreach($obj as $key => $value){
        echo $key . "=>" . $value . "<br>";
     }

     #Looping thro' each value of an associative array
     $jsonobj = '{"Peter":33,"Ben":64,"Joe":24}';
          $arr=json_decode($jsonobj,true);

          echo $arr["Peter"];
          echo $arr["Ben"];


?>


</body>
</html>