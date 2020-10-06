<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*Arguments are used to pass information to functions */
        function fname($fname){
            echo "$fname Refsnes.<br>";
        }
        fname("Jane");
        fname("Jane");
        fname("Judy");
        fname("May");

        /*Multiple Arguments to a function*/

        function familyNAme($first_name,$year){
            echo "$first_name Manchester. Born in $year <br>";
        }
        familyNAme("Ray","1978");
        familyNAme("John","1678");
        familyNAme("Jane","1990");
        familyNAme("Judy","2000");
    ?>

</body>
</html>