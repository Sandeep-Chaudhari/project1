<?php
$servername='localhost';
$username="root";
$password="";
$database_name="database2";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn){

	die("connection failed" .mysqli_connect_error());
}
if (isset($_POST['get'])) 
{
	$lname=$_POST['Name'];
	$lemail=$_POST['Email'];
	$lmobile=$_POST['Mobile'];
	$ladress=$_POST['Adress'];
	$lworkinfo=$_POST['Workinfo'];

	$sql_query=" INSERT INTO base(fname,femail,fmobile,fadress,fworkinfo) VALUES 
	('$lname','$lemail','$lmobile','$ladress','$lworkinfo')";
   
   if(mysqli_query($conn,$sql_query)){
   	echo" new details inserted successfully";
    }
    else
    { 
    	echo "error" .$sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>