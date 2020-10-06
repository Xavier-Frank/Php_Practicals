<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
    # 1. Date (Y-year,m-Month,d-Day,l-Day if the Week)
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Day is " . date("l");

        #Automatic copyright
        /* &copy; 2010 - <?php echo date("Y");?> */

    # 2. Time (H-24h,h-12h,i-min,s-Sec,a-lowercase am/pm)
        echo "<br>";

        echo "The time is " . date("H:m:sa");



    ?>

</body>
</html>