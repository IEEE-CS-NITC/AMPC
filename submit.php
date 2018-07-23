<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'config.php';
	
	if(isset($_POST['submit']))
	{
        $team = $_POST['team'];
        $name1 = $_POST['name1'];
        $mob1 = $_POST['mob1'];
        $email1 = $_POST['email1'];
        $roll1 = $_POST['roll1']

        $name2 = $_POST['name2'];
        $mob2 = $_POST['mob2'];
        $email2 = $_POST['email2'];
        $roll2 = $_POST['roll2']

        $name3 = $_POST['name3'];
        $mob3 = $_POST['mob3'];
        $email3 = $_POST['email3'];
        $roll3 = $_POST['roll3']

        $name4 = $_POST['name4'];
        $mob4 = $_POST['mob4'];
        $email4 = $_POST['email4'];
        $roll4 = $_POST['roll4']

        $name5 = $_POST['name5'];
        $mob5 = $_POST['mob5'];
        $email5 = $_POST['email5'];
        $roll5 = $_POST['roll5']

        $title = $_POST['title'];
        $desc = $_POST['description'];
	$file = $_POST['file'];
/**
		
		$file = $_FILES['file']['name'];
		$tmp_dir = $_FILES['file']['tmp_name'];
		$size = $_FILES['file']['size'];
		
		
			$upload_dir = 'uploads/'; // upload directory
	
			$ext = strtolower(pathinfo($file,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('pdf', 'doc', 'docx'); // valid extensions
		
			// rename uploading image
			$userfile = rand(1000,1000000).".".$ext;
				
			// allow valid image file formats
			if(in_array($ext, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 2500000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userfile);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only pdf, doc & docx files are allowed.";		
			}
		
		
		**/
		// if no error occured, continue ....

			$stmt = $DB_con->prepare('INSERT INTO reg(team,name1,name2,name3,name4,name5,mob1,mob2,mob3,mob4,mob5,email1,email2,email3,email4,email5,roll1,roll2,roll3,roll4,roll5,title,description,file) VALUES(:team,:name1,:name2,:name3,:name4,:name5,:mob1,:mob2,:mob3,:mob4,:mob5,:email1,:email2,:email3,:email4,:email5,:roll1,:roll2,:roll3,:roll4,:roll5,:title,:description,:file)');
            $stmt->bindParam(':team',$team);
            $stmt->bindParam(':name1',$name1);
            $stmt->bindParam(':name2',$name2);
            $stmt->bindParam(':name3',$name3);
            $stmt->bindParam(':name4',$name4);
            $stmt->bindParam(':name5',$name5);
            $stmt->bindParam(':mob1',$mob1);
            $stmt->bindParam(':mob2',$mob2);
            $stmt->bindParam(':mob3',$mob3);
            $stmt->bindParam(':mob4',$mob4);
            $stmt->bindParam(':mob5',$mob5);
            $stmt->bindParam(':email1',$email1);
            $stmt->bindParam(':email2',$email2);
            $stmt->bindParam(':email3',$email3);
            $stmt->bindParam(':email4',$email4);
            $stmt->bindParam(':email5',$email5);
            $stmt->bindParam(':roll1',$roll1);
            $stmt->bindParam(':roll2',$roll2);
            $stmt->bindParam(':roll3',$roll3);
            $stmt->bindParam(':roll4',$roll4);
            $stmt->bindParam(':roll5',$roll5);
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':description',$desc);
            $stmt->bindParam(':file',$file);
	}
?>
