<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        /*PhP Object: A data type storing data and info on how to process it.We first declare a class of object i.e.*/
        class Car{
            function Car(){
                $this->model="BMW";
                $this->plate="KCB 147J";
                $this->color="white";
                $this->tyres="4";

            }
        }
        #Create an object
        $polo= new Car();

        #Showing object properties
        echo $polo->model . "<br>";
        echo $polo->plate . "<br>";
        echo $polo->color . "<br>";
        echo $polo->tyres . "<br>";

    ?>

</body>
</html>