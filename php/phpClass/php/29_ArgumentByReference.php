<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*Changes in the argument also change the variable  that was passed in
        "&" is used to turn a function argument into a reference*/

        function add_one(&$val){
            $val +=1;
        }
        $num = 8;
        add_one($num);
        echo $num;

    ?>

</body>
</html>