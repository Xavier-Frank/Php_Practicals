<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        echo "variable txt is a global variable and cannot be accessed inside the function";
        #Therefore nothing is printed

        $txt="Cannot be accessed within this function";

        function global(){
            echo "The txt above is global variable and $txt";
        }
        #Lets execute the function
        global();

    ?>

</body>
</html>