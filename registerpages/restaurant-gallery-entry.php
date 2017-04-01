<?php

include '../Connection.php';
session_start();
$username=$_SESSION["username"];
$now = new DateTime();
$time = $now->format('YmdHis');
$target_dir = "uploads/restaurants/";
$target_file = $target_dir.$time. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
$result=$conn->query("select id from restaurant where username='$username'");
$row = $result->fetch_assoc();
$id=$row['id'];

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check == false) {
                $err1 = "File is not an image.";
                $uploadOk = 0;
            }
            else if (file_exists($target_file)) {

                $err1 = "Sorry, file already exists.";
                $uploadOk = 0;
            }
            else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                $err1 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql="insert into restaurantgallery values('$id','$target_file')";
                      echo $sql;                
            } else {
                        $uploadOk = 2;
                        $err1 = "Sorry, there was an error uploading your file.";
            }
            }
         
      if ($uploadOk != 1) {
        $err2 = "Sorry, your file was not uploaded.";
        header("Location:restaurant-gallery.php?e=$uploadOk");
        return;    
        // if everything is ok, try to upload file
    }
    if($conn->query($sql)===TRUE) echo 'done' ;
    else echo 'not done';
    header("Location:restaurant-gallery.php");
}
?>
