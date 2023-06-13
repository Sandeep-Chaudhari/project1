<?php 
	$lname=$_POST['Name'];
	$lemail=$_POST['Email'];
	$lmobile=$_POST['Mobile'];
	$lworktype=$_POST['worktype'];
	$lexperience=$_POST['experience'];

	if(!empty($lname) || empty($lemail) || empty($lmobile) || empty($lworktype) || empty($lexperience))
	{
		$servername='localhost';
		$username="root";
		$password="";
		$database_name="database3";

		$conn = new mysqli($servername,$username,$password,$database_name);

		if(mysqli_connect_error()){

			die('connection error('.mysqli_connect_errno().')'.mysqli_connect_error());

		}else
		{
			$SELECT = "SELECT Email FROM base2 WHERE Email=? limit 1";
			$INSERT = "INSERT INTO base2(Name,Email,Mobile,Worktype,Exp) VALUES (?,?,?,?,?)";

			$stmt = $conn->prepare($SELECT);
			$stmt ->bind_param("s",$Email);
			$stmt ->execute();
			$stmt ->bind_result($Email);
			$rnum= $stmt->num_rows;

			if($rnum==0){
				$stmt->close();

				$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("ssiss",$lname,$lemail,$lmobile,$lworktype,$lexperience);
				$stmt->execute();
				echo "THANKS FOR FILLING INFORMATION, WE WILL CONTACT YOU!!!!!!";

			}else{echo "somebody alredy exist"; }
			if (isset($_POST['save'])) {
		header("Location:index.html");}

			$stmt->close();
			$conn->close();
		}
	}
	else
	{
		echo "all feilds are required";
		die();
	}
	
?>


