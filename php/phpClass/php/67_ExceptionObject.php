<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
   /*Exception Object: contains info about the error
   or unexpected behaviuor that the function encountered*/



   function divide($dividend,$divisor){
        if($divisor == 0 ){
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
   }
   try{
        echo divide(5,0);
   }catch(Exception $e){
        $code = $e-> getCode(); //Returns the exception code
        $message = $e->getMessage(); //returns a string describing why the exception was thrown
        $file = $e->getFile(); //file path of the file in which the exception was thrown
        $line= $e->getLine(); //Line number of the line of code which threw the exception

        echo "Exception was thrown in $file on line $line : [Code $code] $message";
   }
?>


</body>
</html>