<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*echo has no return value while print has a return value of 1 hence can be used in expressions*/
        /*echo can take multiple parameters while print can only take one .e.g. below*/
        /* echo is marginally faster than print*/
        echo "This", " ","String" ," ", " was "," ", " made "," " ," with multiple parameters";
        $txt="Hello World";
        $txt2="PHP";

        echo "<h3>" .$txt. "</h3>";
        echo "I love : " . $txt2 . "<br>";
    ?>

</body>
</html>