<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /* After execution of a function all its variables are  deleted...
        we use static keyword when we first declare the variables
        that we don't want to be deleted after code completion .e.g. */
        function myVariables(){
            static $x=0;
            echo $x;
            $x++;
        }
        myVariables();
        myVariables();
        myVariables();
        myVariables();

    ?>

</body>
</html>