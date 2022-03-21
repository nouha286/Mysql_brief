
<?php 
        include('i.php');
        session_start();
   $students_id= $_GET['id'];
   $sql = "SELECT * FROM students WHERE id='$students_id' ";

   $result = mysqli_query($conn, $sql);
   $students = mysqli_fetch_assoc($result);

   if(isset($_POST['save']))
{
    $Name = $_POST['Name'];
    $Email= $_POST['Email'];
    $Phone= $_POST['Phone'];
    $Enroll_Number= $_POST['Enroll_Number'];
    $Date_of_admission=$_POST['Date_of_admission'];
    $sql = "UPDATE students SET SName='$Name', Email='$Email', Phone='$Phone', Enroll_Number='$Enroll_Number', Sdate='$Date_of_admission' WHERE id='$students_id'";
        if(mysqli_query($conn, $sql))
        {
            header('location: ./Students.php');
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
             $active2="active";
             $active3="";
             $active4="";
             
             $area1="";
             $area2='aria-current="true"';
             $area3="";
             $area4="";
  
              $bac1=" background:#FAFFC1";
              $bac2="background:#00C1FE;";
              $bac3="background:#FAFFC1";
              $bac4="background:#FAFFC1";
           include('sidebar.php')  ?>
    
            <!--body-->

            <div class="col-10" >
            <?php  include('navbar.php')  ?>
              
               
                     <form method="POST" onsubmit="return std()" >

                                <div class="mb-3">
                                <label for="N" class="form-label">Name:</label>
                                <input type="text" class="form-control" name="Name" id="N" value="<?php echo $students['SName']; ?>">
                                </div>

                                <span id="nom" class="alert-danger" role="alert"></span>

                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email:</label>
                                <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $students['Email']; ?>">

                                </div>

                                <span id="mail" class="alert-danger" role="alert"></span>

                                <div class="mb-3">
                                <label for="P" class="form-label">Phone:</label>
                                <input type="text" name="Phone" class="form-control" id="P" value="<?php echo $students['Phone']; ?>">
                                </div>

                                <span id="telephone" class="alert-danger" role="alert"></span>

                                <div class="mb-3">
                                <label for="E" class="form-label">Entroll_Number:</label>
                                <input type="text" name="Enroll_Number" class="form-control" id="E" value="<?php echo $students['Enroll_Number']; ?>">
                                </div>

                                <span id="E_telephone" class="alert-danger" role="alert"></span>

                                <div class="mb-3">
                                <label for="D" class="form-label">Date d'admission:</label>
                                <input type="date" name="Date_of_admission" class="form-control" id="D" value="<?php echo $students['Sdate']; ?>">
                                </div>

                                <button type="submit" class="btn btn-primary" name="save">Save</button>
                     </form>


<?php 


?>



   
    <?php include('script.php') ?>
    <script src="Students.js" ></script>
</body>
</html>