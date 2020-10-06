<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*Php constants are variables which when once declared cannot be changed or declared*/
        /*Stars with a letter or an underscore but not a "$" sign*/
        /*Constants are automatically global across the entire script*/
        # syntax: define(name,value,case-insensitive); default:false

        #Constant with case-sensitive
        define("GREETINGS","Hello World!");

        echo GREETINGS;

        #Constant with case-insensitive
        define("HELLO","Hello World!",true);

        echo hello;
    ?>

</body>
</html>