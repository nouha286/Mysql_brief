<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>E-class_Sign_Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body   >



    
    <div class="container"  >
        <div class=" card bg-white" style="max-width:600px; margin: auto;"  >
            <div class="" style="border: none;">
              <p class="border-start ms-5 border-4 border-info my-3" style="font-style: normal; font-weight: bold; font-size: 32px; line-height: 39px;"> E-classe</p>
            </div>

            <form class="card-body" method="POST" onsubmit="return valeur()">
                    <h5 class="card-title text-center">SIGN IN</h5>
                    <p class="card-text text-center">Enter your credentials to create a new account</p>
                    <div class="mb-3 mt-3 ">
                      <label for="eml" style="color: gray;"  >Email:</label>
                      <input type="text"  class="form-control form-control-lg" id="email" placeholder="Enter your email" name="email" style="opacity: 0.5;">
                    </div>
                    
                    <div class="mb-3 mt-3 ">
                      <label for="eml" style="color: gray;" >UserName:</label>
                      <input type="text" class="form-control form-control-lg" name="UserName" id="name" placeholder="Enter your name" name="email" style="opacity: 0.5;">
                    </div>
                    
                    <div class="mb-3 ">
                      <label for="pwd" style="color: gray;">Password:</label>
                      <input type="password" class="form-control form-control-lg" name="e_password" id="pwd" placeholder="Enter your password" name="e_password" style="opacity: 0.5;">
                    </div>
                    <span id="pass" class="alert-danger" role="alert"></span>
                   
                  <input  type="submit"  value="SIGN up" name="save" class="btn btn-secondary btn-lg container" style="background-color: #00C1FE; border: none;"> 
            </form>


          
        </div>
     </div>


     <?php
    include('i.php');
    if(isset($_POST['save']))
    {
            $userName = $_POST['UserName'];
            $password = md5($_POST['e_password']);
            $email= $_POST['email'];
     
     

            $sql= " INSERT INTO comptes VALUES( '$email','$password',NULL,'$userName')";
            if(mysqli_query($conn, $sql))
            {
                echo "<script>window.location.href = './SignIN.php';</script>";
            }
            else{
                echo "error";
            }
            
    }

?>

    

     



   <?php include('script.php') ?>
  <script src="compte.js" ></script>
</body>
</html>