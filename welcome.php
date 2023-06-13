<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
    <h1>search your work and give status</h1>
    <h3><b>plumbing</b></h3>
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

            $sql = "SELECT * FROM plget";
            $result = $conn->query($sql);

            if (!$result) {
                die("invalid query" . $conn->error);
                }

            while ($row = $result->fetch_assoc()) {
                  echo" <tr>
                 <td>" . $row['id'] ."</td> 
                <td>" . $row['fname'] ."</td>
                <td>". $row['femail'] ."</td>
                <td>". $row['fmobile'] ."</td>
                <td>". $row['fadress'] ."</td>
                <td>". $row['fworkinfo'] ."</td>
                <td>
                <form action='deletepl.php' method='post'>
                work id
                <input type='text' name='id' required>
                <input type='submit' name='delete' value='work done' class='btn btn-primary btn-sm' >
                </form>
                <a class='btn btn-primary btn-sm' href='complaint.html'>Complaint</a>
                </td>
                </tr>"; }

        
      ?>
        </tbody>

</table>
<h3><b>painting</b></h3>
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
                  echo" <tr>
                 <td>" . $row['id'] ."</td> 
                <td>" . $row['fname'] ."</td>
                <td>". $row['femail'] ."</td>
                <td>". $row['fmobile'] ."</td>
                <td>". $row['fadress'] ."</td>
                <td>". $row['fworkinfo'] ."</td>
                <td>
                <form action='deletepain.php' method='post'>
                work id
                <input type='text' name='id' required>
                <input type='submit' name='delete' value='work done' class='btn btn-primary btn-sm' >
                </form>
                <a class='btn btn-primary btn-sm' href='complaint.html'>Complaint</a>
                
                </td>
                </tr>"; }

        
      ?>
        </tbody>

</table>
<h3><b>electrition</b></h3>
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

            $sql = "SELECT * FROM eleget";
            $result = $conn->query($sql);

            if (!$result) {
                die("invalid query" . $conn->error);
                }

            while ($row = $result->fetch_assoc()) {
                  echo" <tr>
                <td>" . $row['id'] ."</td> 
                <td>" . $row['fname'] ."</td>
                <td>". $row['femail'] ."</td>
                <td>". $row['fmobile'] ."</td>
                <td>". $row['fadress'] ."</td>
                <td>". $row['fworkinfo'] ."</td>
                <td>
                <form action='deleteele.php' method='post'>
                work id
                <input type='text' name='id' required>
                <input type='submit' name='delete' value='work done' class='btn btn-primary btn-sm' >
                </form>
                <a class='btn btn-primary btn-sm' href='complaint.html'>Complaint</a>
                
                </td>
                </tr>"; }

        
      ?>
        </tbody>

</table>
<h3><b>mechanical</b></h3>
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

            $sql = "SELECT * FROM mecget";
            $result = $conn->query($sql);

            if (!$result) {
                die("invalid query" . $conn->error);
                }

            while ($row = $result->fetch_assoc()) {
                  echo" <tr>
                 <td>" . $row['id'] ."</td>  
                <td>" . $row['fname'] ."</td>
                <td>". $row['femail'] ."</td>
                <td>". $row['fmobile'] ."</td>
                <td>". $row['fadress'] ."</td>
                <td>". $row['fworkinfo'] ."</td>
                <td>
                <form action='deletemec.php' method='post'>
                work id
                <input type='text' name='id' required>
                <input type='submit' name='delete' value='work done' class='btn btn-primary btn-sm' >
                </form>
                <a class='btn btn-primary btn-sm' href='complaint.html'>Complaint</a>
                
                </td>
                </tr>"; }

        
      ?>
        </tbody>

</table>
<h3><b>transport</b></h3>
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

            $sql = "SELECT * FROM transget";
            $result = $conn->query($sql);

            if (!$result) {
                die("invalid query" . $conn->error);
                }

            while ($row = $result->fetch_assoc()) {
                  echo" <tr>
                 <td>" . $row['id'] ."</td>  
                <td>" . $row['fname'] ."</td>
                <td>". $row['femail'] ."</td>
                <td>". $row['fmobile'] ."</td>
                <td>". $row['fadress'] ."</td>
                <td>". $row['fworkinfo'] ."</td>
                <td>
                <form action='deletetrans.php' method='post'>
                work id
                <input type='text' name='id' required>
                <input type='submit' name='delete' value='work done' class='btn btn-primary btn-sm' >
                </form>
                <a class='btn btn-primary btn-sm' href='complaint.html'>Complaint</a>
                
                </td>
                </tr>"; }

        
      ?>
        </tbody>

</table>

</body>
</html>