<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    /*Destructor: Called when the object is destructed or the script is stopped or exited*/
    class Fruit{
        public $name,$color;

        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        function __destruct(){
            echo " The fruit is {$this->name} and the color is {$this->color}.";
        }

        $apple = new Fruit("Apple","pink");
    }


?>


</body>
</html>