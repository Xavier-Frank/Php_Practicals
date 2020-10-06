<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        #. Check if an ip address is valid
        $ip = "127.0.0.1";

        if(!filter_var($ip,FILTER_VALIDATE_IP) === false){
            echo "$ip : is valid IP address";
        }else{
            echo "$ip : is not valid";
        }
    ?>


</body>
</html>