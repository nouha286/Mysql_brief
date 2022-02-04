<?php
include('i.php');
    if(isset($_POST['save']))
    {
            $course = $_POST['course'];
            $subject= $_POST['subject'];
            $author= $_POST['author'];
            $Duration_of_course= $_POST['Duration_of_course'];
     

            $sql= " INSERT INTO courses VALUES(NULL, '$course','  $subject',' $author','$Duration_of_course')";
            if(mysqli_query($conn, $sql))
            {
                echo "<script>window.location.href = './Courses.php';</script>";
            }
            else{
                echo "error";
            }
            
    }

?>