<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    $ip="2001:0db8:85a3:08d3:1319:812e:0370:7334"

    if(!filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)===false){
        echo "$ip is a valid ipv6 address";
    }else{
        echo "$ip is not a valid ipv6 address";
    }
?>


</body>
</html>