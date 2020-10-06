<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*Php provides automatic data conversion i.e assigning an integer to a variable makes that variable
        become an integer.
        Then assigning a string to the same variable makes that variable become a string.
       */
       #PHP Integers

       /*An integer is a number without any decimal part.An Integer can be positive or negative*/

       //Examples of PHP integer functions
       // (i) is_int(): Checks if a variable is integer
       $x=5985;
       var_dump(is_int($x));

       #PhP Floats

       /*A number with a decimal point or a number with an exponential*/

       //Examples of PHP float functions
       // (i) is_float() //chaecks if the variable is float
       // (ii) is_double - alias of is_float()

       $y=9.895;
        var_dump(is_float($y));

      #PhP Infinity
      //A number larger than PHP_FLOAT_MAX

      //.e.g. of php infinite functions
      // (i) is_infinite : checks if a numeric value is infinite
      // (ii) is_finite : checks if a numeric value is finite
      $z=1.9e405;
      var_dump($x);

      #PHP NaN
      /*NaN : Not a Number. Used for impossible Mathematical situations */

      //e.g. of php NaN func.
      //(i)is_nan().Note var_dump(), returns the datatype and value
      $w=acos(8);
      var_dump($w);

      #PhP Numerical Strings
      /* is_numeric() function can be used to find whether a number is numeric
      Func. returns true if the variable is a number or a numeric string , otherwise false*/

      $txt="5896";
      var_dump(is_numeric($txt));

      $txt1="56.90" + 90;
      var_dump(is_numeric($txt1));

      $txt2=875498;
      var_dump(is_numeric($txt2));



    ?>

</body>
</html>