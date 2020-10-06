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

        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        function get_name(){
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
    }
    $apple = new Fruit("Apple","pink");
    echo $apple->get_name();    //constructor saves us from calling the set_name method
    echo "<br>";
    echo $apple->get_color();

?>


</body>
</html>