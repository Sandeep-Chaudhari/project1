<?php 
	$lname=$_POST['Name'];
	$ldetails=$_POST['details'];
	$lmobile=$_POST['Mobile'];
	
	if(!empty($lname) || empty($ldetails) || empty($lmobile) )
	{
		$servername='localhost';
		$username="root";
		$password="";
		$database_name="complaints";

		$conn = new mysqli($servername,$username,$password,$database_name);

		if(mysqli_connect_error()){

			die('connection error('.mysqli_connect_errno().')'.mysqli_connect_error());

		}else
		{
			$SELECT = "SELECT cmobile FROM comp WHERE cmobile=? limit 1";
			$INSERT = "INSERT INTO comp(cname,cdetails,cmobile) VALUES (?,?,?)";

			$stmt = $conn->prepare($SELECT);
			$stmt ->bind_param("i",$cmobile);
			$stmt ->execute();
			$stmt ->bind_result($cmobile);
			$rnum= $stmt->num_rows;

			if($rnum==0){
				$stmt->close();

				$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("ssi",$lname,$ldetails,$lmobile);
				$stmt->execute();
				echo "THANKS FOR FILLING INFORMATION, WE WILL CONTACT YOU!!!!!!";

			}else{echo "somebody alredy exist"; }
			$stmt->close();
			$conn->close();
		}
	}
	else
	{
		echo "all feilds are required";
		die();
	}
if (isset($_POST['save'])) {
		header("Location:welcome.php");}
?>


