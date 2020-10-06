 <?php
         # Create a cookie with php
         /*Syntax: setcookie(name,value,expire,path,domain,secure,httponly)
         NOTE : only the name parameters are required the rest are optional*/

         $cookie_name="user"; //cookie name
         $cookie_value="Xavier";
         $setcookie($cookie_name,$cookie_value,time() + (86400 * 30),"/");

         # must appera b4 <html>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*Cookie is a small file that the server embeds in a user computer to identify
         the user.Each time the same computer requests a page via a browser it will send the
         cookie too*/
         #php can be used to create and retreive

         if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie named '". $cookie_name . "'is not set!";
         }else{
            echo "Cookie '" . $cookie_name  . "'is set" . "<br>";
            echo "Value:" . $_COOKIE[$cookie_name];
         }

        #Check if a cookie is enabled
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled";
        }else{
            echo "Cookies are disabled";
        }
        #Delete a cookie : set to an expired date
        setcookie("user","",time() - 3600); //shld appear b4 <html> tags


    ?>



</body>
</html>