<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        #If...else Statement
        $time=date("H");
        if($time<"20"){
            echo "Good Morning World";
        }else{
            echo "Good Evening";
        }
        #elseif

        $y=date("H");
        if($y<"10"){
            echo "Good Morning";
        }elseif($y>"22"){
            echo "Good Night";
        }else{
            echo "Good Day";
        }
    ?>

</body>
</html>