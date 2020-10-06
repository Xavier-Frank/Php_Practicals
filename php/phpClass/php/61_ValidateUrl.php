<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    #FOR URL THAT MUST CONTAIN QUERY STRING
    $URL="https://www.w3schools.com";

    if(!filter_var($URL,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)===false){
        echo "$URL is a valid URL with query string";
    }else{
        echo "$URL is not a valid URL WITH a query string";
    }
?>


</body>
</html>