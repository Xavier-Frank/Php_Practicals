<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        # 1. Open file - fopen();
        /*Gives better option then fread() fxn */
        /*First parameter is the file to be opened and the 2nd parameter is the mode in which the file lis to be opened
        */

        $myFileData= fopen("TextFileSample.txt","r") or die ("File not found");
        echo fread($myFileData,filesize("TextFileSample.txt")); //reads an open file
        fclose($myFileData); //closes an opened filed

        echo "<br>";


    ?>
&copy; 2010 - <?php echo date("Y/m/d");?>


</body>
</html>