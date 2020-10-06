<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>
       <?php /*Ensure in the php.ini file file_uploads directive is set on */
                #Creating a HTML form to allow users choose the image file to upload
       ?>

       <form action="upload.php" method="post" enctype="multipart/form-data">
          Select an Image:
          <input type="file" name="fileToUpload" id="fileToUpload">
          <br>
          <input type="submit" value="UploadImage" name="submit">
       </form>

       <php
            /*The form above sends data to a file called "upload.php" which is created
            below*/

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
       ?>
       <php /*To check if the file already exist*/
        if(file_exists($target_file)){
            echo "File already exists";
            $uploadOk=0;
        }?>

        <?php
                /*Limit the file size*/
                if($_FILES["fileToUpload"]["size"] > 500000) {
                    echo "file too large";
                    $uploadOk=0;
                }
        ?>
        <?php /*Limit file type*/
            if($imageFileType !="jpeg" && $imageFileType !="jpg"
                && $imageFileType !="png" && imageFileType !="png"){
                    echo "Only jpeg,jpg,png and gifs allowed";
                    $uploadOk=0;
                }
         ?>

</body>
</html>