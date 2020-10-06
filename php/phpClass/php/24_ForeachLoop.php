<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*Works on arrays and is used to loop thro' each value pair/key in an array*/

        $names=array("Hisham","Bless","Obongobongo","Henry","Ray");

        foreach($names as $name){
            echo "$name : is a bully <br>";
        }
        /*
            $marks=array("Hisham"=>"78","Bless"=>"89","Obongobongo"=>56,"Henry"=>"80","Ray"=>"45");
            foreach($marks as $y=>$mark){
                echo "$y=$mark <br>";
            }
        */
    ?>

</body>
</html>