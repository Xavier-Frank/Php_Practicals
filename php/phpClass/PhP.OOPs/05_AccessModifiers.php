<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    /*PUBLIC : can be accessed from anywhere.This is default
     PROTECTED : method can be accessed within the class and by the classes derived from that class
     PRIVATE : method can only be accessed within the class */

     class Fruit{
        public $name;
        private $weight;
        protected $color;

     }
     $mango = new Fruit();
     $mango->name='Mango'; //ok
     $mango->weight='30'; //error
     $mango->color='yellow'; //error

?>


</body>
</html>