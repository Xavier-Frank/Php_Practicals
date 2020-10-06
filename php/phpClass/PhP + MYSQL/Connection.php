<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    # 1. MySQLi Object-Oriented
        $servername= "localhost";
        $username = "username";
        $password = "Password12*";

        try{

        //Create Connection
        $conn= new mysqli($servername,$username,$password);

        //Check connection
        if($conn->connect_error){
            die("Connection failed : " . $conn->connect_error);
        }
        echo "Connected successfully";

        $conn->close(); // close connection
        }catch(SQLException $e){
            echo "Connection failed" . $e->getMessage();
        }
    # 2. PDO
//         $servername= "localhost";
//         $username = "username";
//         $password = "Password12*";
//
//         try{
//             $conn = new PDO("mysql:host=$servername;dbname=MyStaff,$username,$password");
//             //set PDO error mode to exception
//             $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//             echo "Connected successfully";
//
//         }catch(PDOException $e){
//             echo "Connection failed : " . $e->getMessage();
//         }
?>


</body>
</html>