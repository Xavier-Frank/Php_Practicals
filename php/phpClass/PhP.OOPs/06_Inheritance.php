<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

<?php
    /*When a class acquires properties from another class*/

    class Fruit {
        public $name;
        public $color;
        public $weight;

        //Constructor
        public function __construct($name,$color,$weight){
            this->name = $name;
            this->color = $color;
            this->weight = $weight;
        }
        public function intro(){
            echo " The fruit is {$this->name} and the color is {$this->color}"
        }
    }
        //Apple is inherited from fruit
   class Apple extends Fruit{
    public function message(){
        echo "Am i a Fruit or a Berry";
    }
   }
   $apple=new Apple("Apple","pink","");
   $apple->message();
   $apple->intro();


?>


</body>
</html>