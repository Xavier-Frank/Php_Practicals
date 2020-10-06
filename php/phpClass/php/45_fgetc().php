<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        # used to read a single character from a file
        $myFileData=fopen("TextFileSample.txt","r") or die ("unable to open file");

        //out a single character from a file until end-of-file
        while(!feof($myFileData)){
            echo fgetc($myFileData) . "<br>";
        }
        fclose($myFileData);
    ?>

</body>
</html>