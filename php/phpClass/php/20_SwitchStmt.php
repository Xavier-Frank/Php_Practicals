<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        #Switch Stmt
        /*Used to perform different actions based on different conditions*/
        $name="Xavier";

        switch($name){
            case "John":
                echo "Hello John";
                break;
            case "Xavi":
                echo "Hae Xavi";
                break;
            case "Xavier":
                echo "Hey How are you?";
                break;
            default:
                echo "Nobody found";
        }
    ?>

</body>
</html>