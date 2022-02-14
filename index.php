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

            <form class="card-body" method="POST">
                    <h5 class="card-title text-center">SIGN IN</h5>
                    <p class="card-text text-center">Enter your credentials to access your account</p>
                    <div class="mb-3 mt-3 ">
                      <label for="eml" style="color: gray;" >Email</label>
                      <input type="email" class="form-control form-control-lg" id="eml" placeholder="Enter your email" name="email" style="opacity: 0.5;">
                    </div>
                    <div class="mb-3 ">
                      <label for="pwd" style="color: gray;">Password</label>
                      <input type="password" class="form-control form-control-lg" id="pwd" placeholder="Enter your password" name="e_password" style="opacity: 0.5;">
                    </div>
                  <input  type="submit" value="SIGN IN"  class="btn btn-secondary btn-lg container" style="background-color: #00C1FE; border: none;"> 
            </form>


            <div class=" text-center " style="border: none;">
                <div  class=" text-center " style="margin-top: 10px;">
                    <p style="color: gray;"><a href="créationComptes.php" style="color: black; text-decoration:none; ">Reset your password?</a><a href="créationCompte.php" style="color: #00CFE1;">create new account</a></p>
                </div>
            </div>
          </div>
     </div>


     <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


  if(isset($_POST["email"]) && isset($_POST["e_password"])){


    include('i.php');

    $email = $_POST["email"];
    $password = hash('sha256', $_POST["e_password"]) ;

     $query = "SELECT *  FROM comptes WHERE email = '$email'  AND  e_password = '$password' ";
     $user = mysqli_query($conn,$query);


     if( mysqli_num_rows($user) != 0 ){
         session_start();
         $rsl = mysqli_fetch_assoc($user);
         $_SESSION['id'] = $rsl['id'];
         $_SESSION['e_password'] = $rsl['e_password'];
         $_SESSION['email'] = $rsl['email'];
         header('location: ./home.php');
     }

  }
  else{
   
    header('location: ./alert.php');
  }

}




?>
 

     



   <?php include('script.php') ?>
</body>
</html>