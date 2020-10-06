<?php
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
        #setting session variables
        $_SESSION["favColor"] = "green";
        $_SESSION["favAnimal"] = "cat";

        echo "Session variables are set";

    ?>


</body>
</html>