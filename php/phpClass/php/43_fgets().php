<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*fgets() reads a single line  from a file */

        $myFileData= fopen("TextFileSample.txt","r") or die("Unable to open file");
        echo fgets($myFileData);
        echo "<br>";
        echo fgets($myFileData);

        fclose($myFileData);

    ?>



</body>
</html>