<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        #CREATE file
        /*fopen() : used to create a file if it does not exist given taht the file is opened for
        writing (w) or appending (a) .e.g.*/

        $myFile = fopen("newfile.txt","w") or die ("unable to open file");

        #WRITE to file
        /*fwrite() : used to write to a file. 1st parameter name of file to write
         to and 2nd parameter the string to be written*/

         $txt="Hello World\n";
         fwrite($myFile,$txt);
         $txt="My name is xoxo\n";
         fwrite($myFile,$txt);

         fclose($myFile);




    ?>


</body>
</html>