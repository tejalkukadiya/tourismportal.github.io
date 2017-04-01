
<?php
	include '../Connection.php';

		
		//echo $submitVal;
	//if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
			$f_name=$_POST["gfirstName"];
			$l_name=$_POST["glastName"];
			
			$name=$f_name . " " . $l_name;
			$guideId=$_POST["userName"];
			$dob=$_POST["dob"];
			//$imgurl=$_POST["avatar-2"];
			$contactNo=$_POST["contact"];
			$acontactNo=$_POST["acontact"];
			$gender=$_POST["gender"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$langId=implode("," ,$_POST["language"]);
			$spotId=implode("," ,$_POST["places"]);
			
			$idprooftype=$_POST["idprooftype"];
			$idproofno=$_POST["idproofno"];
			$exp=$_POST["gexp"];
			$address=$_POST["address"];
			//$certi=$_POST["certificate"];
			
			
			
			$target_dir = "uploads/guide/";
			$target_file = $target_dir . basename($_FILES["avatar-2"]["name"]);
			$imgurl=$target_file;
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
		////////////////////////////////////////PDF UPLOAD////////////////////////////////////////////////////	
			
			$t_dir = "uploads/guide/Files/";
			$t_file = $t_dir . basename($_FILES["certificate"]["name"]);
			$certi=$t_file;
			$uploadOk = 1;
			$FileType = pathinfo($t_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
					$check = getimagesize($_FILES["certificate"]["tmp_name"]);
					if($check !== false) {
						echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
					} else {
						echo "File is not an image.";
						$uploadOk = 0;
						}
			}
			// Check if file already exists
			if (file_exists($t_file)) {
				echo "Sorry, pdf file already  exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["certificate"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($FileType != "pdf" ) {
				echo "Sorry, only pdf files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["certificate"]["tmp_name"], $t_file)) {
					echo "The file ". basename( $_FILES["certificate"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
			
			
			
					
				
		$conn->query("insert into guide
			 values('$guideId', '$name', '$dob', '$password', '$address', '$idprooftype',
			 '$idproofno', '$exp', '', '$langId','$spotId', '$email', '$imgurl', '$contactNo', 
			 '$acontactNo', '$gender', '$certi')");
			
	
			
	    $conn->query("insert into login values('$guideId','$password','Guide')");
			
		foreach($spotId as $id){	
			$conn->query("insert into guidetouristspot values('$guideId',$id)");
			//echo $sql. "";
			//$conn->query($sql);
		}
		
	//	}
	
/*if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}*/
	header('Location:../main-page/main-page.php');

	
?>