<?php 
	$lname=$_POST['Name'];
	$lemail=$_POST['Email'];
	$lmobile=$_POST['Mobile'];
	$ladress=$_POST['Adress'];
	$lworkinfo=$_POST['Workinfo'];

	if(!empty($lname) || empty($lemail) || empty($lmobile) || empty($ladress) || empty($lworkinfo))
	{
		$servername='localhost';
		$username="root";
		$password="";
		$database_name="database2";

		$conn = new mysqli($servername,$username,$password,$database_name);

		if(mysqli_connect_error()){

			die('connection error('.mysqli_connect_errno().')'.mysqli_connect_error());

		}else
		{
			$SELECT = "SELECT femail FROM mecget WHERE femail=? limit 1";
			$INSERT = "INSERT INTO mecget(fname,femail,fmobile,fadress,fworkinfo) VALUES (?,?,?,?,?)";

			$stmt = $conn->prepare($SELECT);
			$stmt ->bind_param("s",$lemail);
			$stmt ->execute();
			$stmt ->bind_result($lemail);
			$rnum= $stmt->num_rows;

			if($rnum==0){
				$stmt->close();

				$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("ssiss",$lname,$lemail,$lmobile,$ladress,$lworkinfo);
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
		header("Location:displaydata.php");}
?>


