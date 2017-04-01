<?php
include '../Connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$firstname=$_POST['firstName'];
	$lastname=$_POST['lastName'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	$altercontact=$_POST['acontact'];
	$email=$_POST['email'];
	$username=$_POST['userName'];
	echo "---------->".$password;
	$password=$_POST['password'];
	$adhar=$_POST['idproofno'];
	$address=$_POST['address'];
	$flat=$_POST['flat'];
	$area=$_POST['area'];
	$amenities=$_POST['type'];
	$price=$_POST['price'];
	$target_dir="uploads/landlords/";
	$target_file = $target_dir . basename($_FILES["avatar-2"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["avatar-2"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["avatar-2"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["avatar-2"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["avatar-2"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}

	$sql="insert into localaccomodation values('$firstname','$lastname','$contact','$altercontact','$gender','$email','$username','$password','$adhar','$address','$flat','$area','$amenities','$price','$target_file')";
	if ($conn->query($sql) === TRUE) {
        include 'registrationAck.php';	
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
	//header('Location:local-rent.php');
}
?>