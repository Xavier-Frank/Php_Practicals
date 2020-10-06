<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>
    <?php
        #Collects the form data from FormHandling.php using post method
        echo "Your name is:" . $_post["name"];
        echo "<br>";
        echo "Your emails address is:" . $_post["email"];
        echo "<br>";
    ?>

</body>
</html>