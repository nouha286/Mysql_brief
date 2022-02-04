<?php
include('i.php');
$courses_id= $_GET['id'];
mysqli_query($conn, "DELETE FROM courses WHERE id=$courses_id");
header('location: ./Courses.php');
