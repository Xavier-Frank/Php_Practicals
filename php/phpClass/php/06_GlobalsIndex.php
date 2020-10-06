<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
    /* Php also stores all global variables in an array called $GLOBALS[index], which  holds the name of the variable.global
    Function is accessible within functions and can be usef to update variables directly*/
        $x=6;
        $y=10;
        function add(){
            $GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS ['y'];
        }
        #xecute
        add();
        echo $x;
    ?>

</body>
</html>