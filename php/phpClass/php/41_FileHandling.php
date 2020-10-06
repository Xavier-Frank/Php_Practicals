<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    include 'TextFileSample.txt';
    /*Manipulating files: creating,reading,uploading and editing files*/

    # 1.readfile() : reads a file and writes it to the output buffer.
        echo readfile("TextFileSample.txt");

        /*Useful if all u want is open up a file and output its content*/
?>


</body>
</html>