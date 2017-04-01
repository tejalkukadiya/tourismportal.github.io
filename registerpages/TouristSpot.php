		
		
<?php
	include '../Connection.php';
	$now = new DateTime();
	$time = $now->format('YmdHis');
	$target_dir = "uploads/TouristSpots/";
	$uploadOk = 1;
	$sql="";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name=$_POST['name'];
			$famousFor=$_POST['famousFor'];
			$near_by_city=$_POST['near_by_city'];
			echo 'near_by_city'.intval($near_by_city);
			//$distance=(is_numeric($_POST['distance'])?(int)$_POST['distance']:0);
			$distance=$_POST['distance'];
			echo 'distance'.intval($distance);
			$category=$_POST['category'];
			$timing=$_POST['timing'];
			$submitVal=$_POST["submit"];
			
			
		
		echo "1";
		echo (!strcmp($submitVal,"update"));
		echo "2";
		echo (!strcmp($submitVal,"submit"));

		$err1 = "";
		$err2 = "";
		if(!strcmp($submitVal,"update")){
				//$id=$_POST["cid"];
				$id=$_POST['id'];

			$sql="update touristspot set name='$name',famousFor='$famousFor',near_by_city='$near_by_city',distance='$distance',category='$category',timing='$timing' where id='$id'";
			echo $sql;
			
		}else if(!strcmp($submitVal,"submit")){
				//$id=$_POST["cid"];
			$target_file = $target_dir .$time. basename($_FILES["fileToUpload"]["name"]);		
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);	
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
			        $sql="insert into touristspot(name,famousFor,near_by_city,distance,category,timing,img) values( '$name','$famousFor','$near_by_city','$distance','$category','$timing','$target_file')";
				     echo $sql;				        
			} else {
						$uploadOk = 2;
				        $err1 = "Sorry, there was an error uploading your file.";
			}
			}
		}
		
		
	}
	else{
			$id=$_GET["tid"];
			$sql="delete from touristspot where id='$id'";
	}
	if ($uploadOk != 1) {
	    $err2 = "Sorry, your file was not uploaded.";
		header("Location:TouristSpotMain.php?e=$uploadOk");
		return;    
		// if everything is ok, try to upload file
	}
	if ($conn->query($sql) === TRUE) {
		
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
	header('Location:TouristSpotMain.php');

	?>