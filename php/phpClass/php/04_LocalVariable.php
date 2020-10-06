 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Hello PhP</title>
 </head>
 <body>

     <?php
         echo "Hello World";
         function global(){
                    $txt="A local variable";
                     echo "The ,: $txt :, above is local variable and is accesible within this function";
                 }
                 #Lets execute the function
                 global();

                 //Using it outside the function generates an error

     ?>

 </body>
 </html>

