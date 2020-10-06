<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        #. Check if an ip address is valid
        $email = "hishamfarouk@gmail.com";

        //remove all illegal chars
        $email=filter_var($email,FILTER_SANITIZE_EMAIL);

        //validate email

        if(!filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            echo "$email : is valid email address";
        }else{
            echo "$email : is not valid";
        }
    ?>


</body>
</html>