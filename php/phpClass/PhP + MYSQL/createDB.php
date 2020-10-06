<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
   $servername="localhost";
   $username="username";
   $password="Password12*";

    try{
         //create connection
        $conn= new mysqli($servername,$username,$password);

        //check connection
        if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
        }
        echo "Connection Successful";

    }catch(SQLException $e){
        echo "Unable to connect".$e->getMessage();
    }
    echo "<br>";
    //create a database
    $sql="CREATE DATABASE PhpDatabase";
    if($conn->query($sql) == TRUE){
        echo "Database created ";
    }else{
        echo "Error creating database".$conn->error;
    }

    $conn->close();

?>


</body>
</html>