<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    #objects: Each object has all the properties and methods defined in the class

    class Fruit{
        //properties
        public $name;
        public $color;

        //methods
        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
    }
    //instances of the class
    $apple = new Fruit();
    $banana = new Fruit();

    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();

    echo "<br>";

    #instanceof : checks whether an object belongs to a specific class
    var_dump($apple instanceof Fruit);

?>


</body>
</html>