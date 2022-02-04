<?php
include('i.php');
$students_id= $_GET['id'];
mysqli_query($conn, "DELETE FROM students WHERE id=$students_id");
header('location: ./Students.php');
