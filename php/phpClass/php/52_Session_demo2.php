<?php
    //We use this session to access info set on the first session file
    #.Start session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        #session variables set on the first file
        echo "Favourite color is: " . $_SESSION["favColor"] . "<br>" ;

        echo "Favourite animal is: " . $_SESSION["favAnimal"] . "<br>";


        echo "Session variables retrieved";

    ?>
    Sessions can also be shown by running: print_r($_SESSION);


</body>
</html>