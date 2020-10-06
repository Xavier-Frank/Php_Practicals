<?php
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
        #. To modify a session variable just overwrite it
        $_SESSION["favColor"] = "yellow";
        print_r($_SESSION);

    ?>


</body>
</html>