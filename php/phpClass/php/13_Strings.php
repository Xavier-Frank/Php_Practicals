<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        #String: A sequence of characters
        #String Length
        echo strlen("Hello World");
        echo "<br>";

       #Word count
       echo str_word_count("Hello Word");
       echo "<br>";

       #Reverse String
       echo strrev("Hello Word");
       echo "<br>";

       #Search for a specific text within a String (Case sensitive)
       echo strpos("Hello World!","World"); /*Returns the character position of the first match iff its found otherwise false */
       echo "<br>";

       #Replace Text Within a String
       echo str_replace("world!","Xavi","Hello world!");
       echo "<br>";

       $x=5.989
       var_dump(is_int($x));







    ?>

</body>
</html>