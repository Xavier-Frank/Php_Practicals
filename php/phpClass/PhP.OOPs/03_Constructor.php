<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    /*Constructor: allows you to initialize an objects properties upon creation of the object*/
    class Fruit{
        public $name;
        public $color;

        function __construct($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
    }
    $apple = new Fruit("Apple");
    echo $apple->get_name();    //constructor saves us from calling the set_name method
?>


</body>
</html>