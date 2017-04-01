<?php
include '../Connection.php';
$now = new DateTime();
$time = $now->format('YmdHis');
$target_dir = "uploads/hotels/";
$uploadOk = 1;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$hotelname=$_POST['hotelName'];
	///echo $hotelname;
	$managername=$_POST['managerName'];
	$contact=$_POST['contact'];
	$altercontact=$_POST['acontact'];
	$website=$_POST['Website'];
	$email=$_POST['email'];
	$username=$_POST['userName'];
	$password=$_POST['password'];	
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$rating=$_POST['rating'];
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
	       $sql="insert into hotel(hotelname,managername,contact,altercontact,username,password,address,pincode,city,state,rating,email,websites,status,img) values('$hotelname','$managername','$contact','$altercontact','$username','$password','$address','$pincode','$city','$state','$rating','$email','$website','$status','$target_file')";	
	       	        
	} else {
				$uploadOk = 2;
		        $err1 = "Sorry, there was an error uploading your file.";
	}
	}
	

	if ($uploadOk != 1) {
	    $err2 = "Sorry, your file was not uploaded.";
		header("Location:hotel-form.php?e=$uploadOk");
		return;    
		// if everything is ok, try to upload file
	}

	if ($conn->query($sql) === TRUE) {
        header('Location:hotel-form.php');	
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $query="insert into login values('$username','$password','Hotel')";
	$conn->query($query);
	header('Location:hotel-form.php');
}
?>