<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        $target_dir="uploads/"; //directory where the file is to be placed
                    $target_file=$target_dir . basename($_FILES["fileToUpload"]["name"]); //path of file 2 b uploaded
                    $uploadOk = 1;
                    $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //holds the file extension in lowercase
                    //Check if the image file is an actual file
                    if(isset($_POST["submit"])){
                        $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        if($check !==false){
                            echo "File is an image - " . $check ["mime"] . ".";
                            $uploadOk=1;
                            }else{
                                echo "File is not an image";
                                $uploadOk=0;
                            }

                    }

       //Check if the file already exist
       if(file_exists($target_file)){
                   echo "File already exists";
                   $uploadOk=0;
               }

       //Allow certain file types
       if($imageFileType !="jpeg" && $imageFileType !="jpg"
                       && $imageFileType !="png" && imageFileType !="png"){
                           echo "Only jpeg,jpg,png and gifs allowed";
                           $uploadOk=0;
                       }
       //check if upload is set to 0 by an error
       if($uploadOk == 0){
            echo "File was not uploaded";

       //Finally if all is set try to upload
       }else{
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
            echo "The file" . basename($_FILES["fileToUpload"]["name"]) . "has been uploade";

        }else{
                echo "Error uploading the file";
            }
       }


    ?>


</body>
</html>