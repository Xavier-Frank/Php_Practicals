<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    /*Class: A blueprint/templates of object
    Object : An instance of a class
    */
    function HelloWorld(){

        echo "<h1> OOP Intro </h1>";
    }
    HelloWorld();
    # Class: defined using key word class
    class Fruit{
        //properties
        public $name;
        public $color;

        //Methods : getters and setters
        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }

    }


?>


</body>
</html>