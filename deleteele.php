<?php
            $servername='localhost';
            $username="root";
            $password="";
            $database_name="database2";

            $conn = mysqli_connect($servername,$username,$password,$database_name);

            if ($conn->connect_error ){
                die("connection failed" . $conn->connect_error);
            }

                
            
            $id=$_POST['id'];
            
            $query = "DELETE FROM eleget WHERE id='$id'";

            $data=mysqli_query($conn,$query);

            if ($data) {
                echo "<font color = 'green'>RECORD DELETE";
                header("location:welcome.php");
            }
            else
            {
                echo "<font color = 'red'>FAILED TO DELETE ";
            }

?>




