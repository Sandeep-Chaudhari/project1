<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
<h1>LIST OF WORKS</h1>
<a class='btn btn-primary btn-sm' href='hireme.html'>back</a>

<table class="table" bgcolor="lightblue">
	<thead>
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Email</th>
		<th>contact</th>
		<th>Adress</th>
		<th>workinfo</th>
		<th>Select</th>

	</tr>
</thead>
		<tbody> 
			<?php
			$servername='localhost';
			$username="root";
			$password="";
			$database_name="database2";

			$conn = mysqli_connect($servername,$username,$password,$database_name);

			if ($conn->connect_error ){
				die("connection failed" . $conn->connect_error);
			}

			$sql = "SELECT * FROM painget";
			$result = $conn->query($sql);

			if (!$result) {
				die("invalid query" . $conn->error);
				}

			while ($row = $result->fetch_assoc()) {
			      echo"	<tr>
			     <td>" . $row['id'] ."</td> 
				<td>" . $row['fname'] ."</td>
				<td>". $row['femail'] ."</td>
				<td>". $row['fmobile'] ."</td>
				<td>". $row['fadress'] ."</td>
				<td>". $row['fworkinfo'] ."</td>
				<td>
				<a class='btn btn-primary btn-sm' href='form2.html'>GET</a>
                </td>
                </tr>"; }

		
      ?>
		</tbody>

</table>

</body>
</html>