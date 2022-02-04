<?php
include('i.php');
    if(isset($_POST['save']))
    {
            $Name = $_POST['Name'];
            $Email= $_POST['Email'];
            $Phone= $_POST['Phone'];
            $Enroll_Number= $_POST['Entroll_Number'];
            $Date_of_admission=$_POST['Date_of_admission'];

            $sql= " INSERT INTO students VALUES(NULL, '$Name','$Email','$Phone','$Enroll_Number','$Date_of_admission')";
            if(mysqli_query($conn, $sql))
            {
                header('location: ./Students.php');
            }
            else{
                echo "error";
            }
            
    }

?>