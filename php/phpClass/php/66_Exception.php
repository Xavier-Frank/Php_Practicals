<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
   /*Exception: an object which describes an error or an expected behaviour
   of a php script*/

   function divide($dividend,$divisor){
        if($divisor == 0 ){
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
   }
   try{
        echo divide(5,0);
   }catch(Exception $e){
        echo "Unable to divide";
   }finally{
        echo "Process complete"; //code that runs regardless of whether an exception was caught
   }
?>


</body>
</html>