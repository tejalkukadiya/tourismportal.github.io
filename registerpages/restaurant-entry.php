<?php
include '../Connection.php';
$now = new DateTime();
$time = $now->format('YmdHis');
$target_dir = "uploads/restaurants/";
$uploadOk = 1;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$restaurantname=$_POST['resName'];
	$managername=$_POST['managerName'];
	$contact=$_POST['contact'];
	$altercontact=$_POST['acontact'];
	$website=$_POST['resWebsite'];
	$email=$_POST['email'];
	$username=$_POST['userName'];
	$password=$_POST['password'];	
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$cuisine=$_POST['cuisine'];
	$food=$_POST['food'];
	$status=$_POST['status'];
	
	$target_file = $target_dir .$time. basename($_FILES["avatar-2"]["name"]);		
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);	
	 $check = getimagesize($_FILES["avatar-2"]["tmp_name"]);
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
		if (move_uploaded_file($_FILES["avatar-2"]["tmp_name"], $target_file)) {
	        $sql="insert into restaurant(resname,managername,contact,altercontact,website,email,username,password,address,pincode,city,state,cuisine,foodtype,status,img) values('$restaurantname','$managername','$contact','$altercontact','$website','$email','$username','$password','$address','$pincode','$city','$state','$cuisine','$food','$status','$target_file')";		        
	} else {
				$uploadOk = 2;
		        $err1 = "Sorry, there was an error uploading your file.";
	}
	}
}

	if ($uploadOk != 1) {
	    $err2 = "Sorry, your file was not uploaded.";
		header("Location:restaurant-form.php?e=$uploadOk");
		return;    
		// if everything is ok, try to upload file
	}
	if ($conn->query($sql) === TRUE) {
        include 'registrationAck.php';	
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $query="insert into login values('$username','$password','Restaurant')";
	$conn->query($query);
	header('Location:restaurant-form.php');

?>