<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*PHP Has a set of math functions that allows us to perform mathematical tasks
        on number*/

        # 1.pi() Function
         //Returns the value of PI .e.g.
            echo (pi());

        # 2. min() and max() functions
            //return the highest and lowest value from a list
            echo (min(45,67,8,90,23,5));
            //returns   5

            echo (max(2,4,5,6,89,-23));
            //returns 89

       # 3.abs() returns the absolute(positive) value of number
             echo (abs(-7.90));
             //returns 7.90

       # 4. sqrt() returns the square root of a no.
            echo (sqrt(81));
            //returns 9
       # 5.round() rounds a floating point number to its nearest integer
            echo (round(0.89)); //returns 1
            echo (round(0.122334)); //returns 0
       # 6.rand() generates a random number
            echo (rand());

         //to get a specified range
            echo (rand(10,20));

    ?>

</body>
</html>