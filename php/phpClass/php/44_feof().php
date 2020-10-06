<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*Checks if the end-of-file has been reached*/
        /*feof() is useful when looping through data of unknown length*/

        $myFileData=fopen("TextFileSample.txt","r") or die ("unable to open file");

        //output one line until end of file
        while(!feof($myFileData)){
            echo fgets($myFileData) . "<br>";
        }
        fclose($myFileData);
    ?>


</body>
</html>