<?php

session_start();
	$userId=$_SESSION["username"];
	
include '../Connection.php';

$now = new DateTime();
$time = $now->format('YmdHis');

$target_dir = "uploads/guide/";
$target_file = $target_dir .$time. basename($_FILES["fileToUpload"]["name"]);
echo $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check == false) {
                $err1 = "File is not an image.";
                $uploadOk = 0;
            }
            else if (file_exists($target_file)) {
                $err1 = "Sorry, file already exists.";
                $uploadOk = 0;
            }
            else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                $err1 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    //echo $target_file;
                    $sql="update guide set imgurl='$target_file' where guideId='$userId'";
                     echo $sql;                     
            } else {
                        $uploadOk = 2;
                        $err1 = "Sorry, there was an error uploading your file.";
            }
            }
        }



    if ($uploadOk != 1) {
        $err2 = "Sorry, your file was not uploaded.";
       // header("Location:GuideProfile.php?e=$uploadOk");
        return;    
        // if everything is ok, try to upload file
    }
    if ($conn->query($sql) === TRUE) {
        
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
   // header('Location:GuideProfile.php');
?>
