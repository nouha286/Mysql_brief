
<?php 
session_start();
        include('i.php');
   $courses_id= $_GET['id'];
   $sql = "SELECT * FROM courses WHERE id='$courses_id' ";

   $result = mysqli_query($conn, $sql);
   $courses = mysqli_fetch_assoc($result);

   if(isset($_POST['save']))
{
    $course = $_POST['course'];
    $subject= $_POST['subject'];
    $author= $_POST['author'];
    $Duration_of_course= $_POST['Duration_of_course'];

    $sql = "UPDATE courses SET Course='$course', c_Subject='$subject', Author='$author', Duration_of_course='$Duration_of_course' WHERE id='$courses_id'";
        if(mysqli_query($conn, $sql))
        {
            header('location: ./courses.php');
        }
        else{
            echo "error";
        }
        
}
    
    

   
    
    mysqli_close($conn);
    include('test.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <title>Student-option</title>
</head>
<body>

    <div class="row"  style="height:1050px;">
 
            <!--sidebar-->
           <?php  
            $active1="";
            $active2="";
            $active3="";
            $active4="active";

            $area1="";
            $area2="";
            $area3="";
            $area4="aria-current=\"true\"";

            
            $bac1="background:#FAFFC1;";
            $bac2="background:#FAFFC1;";
            $bac3="background:#FAFFC1;";
            $bac4="background:#00C1FE;";
           include('sidebar.php')  ?>
    
            <!--body-->

            <div class="col-10" >
            <?php  include('navbar.php')  ?>
              
               
             <form method="POST" onsubmit="return valeur()">

                            <div class="mb-3">
                            <label for="N" class="form-label">Course:</label>
                            <input type="text" class="form-control" name="course" id="N" value="<?php echo $courses['Course']; ?>">
                            </div>

                            <span id="cours" class="alert-danger" role="alert"></span>

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Subject:</label>
                            <input type="text" class="form-control" name="subject" value="<?php echo $courses['c_Subject']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                            <label for="P" class="form-label">author:</label>
                            <input type="text" name="author" class="form-control" id="P" value="<?php echo $courses['Author']; ?>" >
                            </div>

                            <div class="mb-3">
                            <label for="E" class="form-label">Duration of course:</label>
                            <input type="Date" name="Duration_of_course" class="form-control" id="E" value="<?php echo $courses['Duration_of_course']; $courses['Course']; ?>">
                            </div>

                            <button type="submit" class="btn btn-primary" name="save">Save</button>
             </form>


<?php 


?>



   
    <?php include('script.php') ?>
   <script src="courses.js" ></script>
   
</body>
</html>