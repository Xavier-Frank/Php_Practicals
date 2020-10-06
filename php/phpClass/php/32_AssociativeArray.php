<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
       /*Arrays using named keys that u assign to them*/

       #can be created either by:
       /* $age=array("Peter"=>"20","JAne"=>"19","Son"=>"78");*/

       #or
       /*$age['Peter'] = "20";
         $age['JAne'] = "19";
         $age['Son']=78;*/
       $age=array("Peter"=>"20","JAne"=>"19","Son"=>"78");
       echo "Peter is: ". $age['Peter'] . "years old.";

    ?>

</body>
</html>