<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
            /*Regular expression is a sequence of characters that forms a search pattern.
            When u search for data in a text, you can use this search pattern to describe
            what you are searching for*/
            /*They are strings composed of delimiters, a pattern and optional modifiers*/
            # eg $exp="/names/i"
            /* "/":is a delimiter  and "names":is the pattern u are searching for "i" : modifier
            makes the search case-insensitive*/

            /*Delimiter can be a character that is not a letter,number,backslash or space */
            /*Use other delimiters such as (#) or (~) when your search pattern contains forward slash*/

            # 1. preg_match() : Tells u whether a string contains matches of a pattern
            /*Search for "names" with a case insensitive in the string below*/

            $str="There names are not in the list";
            $pattern = "/names/i";
            echo preg_match($pattern,$str); #returns 1 since there is a match

            # 2.preg_match_all(): tells u how many matches were found for a pattern in a string
            /*Doing a case insensitive count of the no. of occurrences of "ain" in a string*/

            $str2="The rain in SPAIN falls mainly on the plains of curtain";
            $pattern1="/ain/i";
            echo preg_match_all($pattern1,str2); #returns 4

            # 3.preg_replace():Replace all of the matches of the pattern in a string with another
            /*Replace Hisham with Xavier in a string*/

            $str3="My name is Hisham";
            $pattern3="/hisham/i";
            echo preg_replace($pattern3,"Xavier",$str3);
    ?>

</body>
</html>