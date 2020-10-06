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
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    ?>


</body>
</html>