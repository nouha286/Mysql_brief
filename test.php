<?php

   include('i.php')
    
    $id = $_GET['id'];

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $Name = $_POST['Name'];
            $Email= $_POST['Email'];
            $Phone= $_POST['Phone'];
            $Enroll_Number= $_POST['Entroll_Number'];
            $Date_of_admission=$_POST['Date_of_admission'];

        $query = "UPDATE `students` SET  `Name`='$Name',`Email`='$Email',`Phone`='$Phone',`Entroll_Number`='$Entroll_Number',`Date_of_admission`='$Date_of_admission' WHERE id ='$id'";
        mysqli_query($link,$query);
            
    }

    $query = "SELECT * FROM `students` WHERE id ='$id'";
    $result = $link->query($query);
    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc(); 
    }

    $link->close();
?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>

                    <form action="" method="post">

                       <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image" class="form-control" value="<?php  echo $row["image"] ?>">
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" value="<?php  echo $row["name"] ?>" >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>email</label>
                            <input name="email" class="form-control" value="<?php  echo $row["email"] ?>" ></input>
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>phone</label>
                            <input type="text" name="phone" class="form-control " value="<?php  echo $row["phone"] ?>" >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>enroll_umbern</label>
                            <input type="text" name="enroll_umbern" class="form-control" value="<?php  echo $row["enroll_umbern"] ?>" >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>date_of_admission</label>
                            <input type="text" name="date_of_admission" class="form-control" value="<?php  echo $row["date_of_admission"] ?>">
                            <span class="invalid-feedback"></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
