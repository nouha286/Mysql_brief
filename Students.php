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
    <?php include('i.php') ?>
            <!--sidebar-->
           <?php  
            $active1="";
           $active2="active";
           $active3="";
           $area1="";
           $area2='aria-current="true"';
           $area3="";
            $bac1=" background:#FAFFC1";
            $bac2="background:#00C1FE;";
            $bac3="background:#FAFFC1";
           include('sidebar.php')  ?>
    
            <!--body-->

            <div class="col-10" >
            <?php  include('navbar.php')  ?>
              
                <div class="row px-4 bg-light">

                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand d-none d-lg-block">Students list</a>
                          <form class="d-flex" method="POST">
                            <i class="fas fa-sort me-2 mt-3" style="color:#00C1FE ;"></i>
                            <a class="rounded btn btn-primary btn-lg " name="add" style="border: none;color: white;  background-color:#00C1FE;class=" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD NEW Students</a>
                          </form>
                        </div>
                      </nav>

                </div>



<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entrez les informations suivants</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
                    <form method="POST" action="./addstudents.php">

                            <div class="mb-3">
                            <label for="N" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="Name" id="N">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>

                        <div class="mb-3">
                            <label for="P" class="form-label">Phone:</label>
                            <input type="text" name="Phone" class="form-control" id="P">
                        </div>
                        
                        <div class="mb-3">
                            <label for="E" class="form-label">Entroll_Number:</label>
                            <input type="text" name="Enroll_Number" class="form-control" id="E">
                        </div>

                        <div class="mb-3">
                            <label for="D" class="form-label">Date d'admission:</label>
                            <input type="date" name="Date_of_admission" class="form-control" id="D">
                        </div>

                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal -->
<!-- Modal -->


               <div class="row px-4 bg-light" style="">
                    <hr style="color: gray; width: 100%;">
                     <div style="overflow-x:auto;">
                            <table class="table table-condensed text-center ">
                                <thead>
                                <tr style="color: gray;">
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>Enroll Number</th>
                                    <th>Date of admission</th>
                                    <th></th>
                                </tr>
                                </thead>
                    
                                <tbody>
                                
                                <?php
                                 $sql="SELECT *  FROM students";
                                 $res= mysqli_query($conn, $sql);
                                 while($students= mysqli_fetch_assoc($res))
                                 {
                                    echo '<tr>
                                    <td><img src="photo.png" alt=""></td>
                                    <td>'.$students['SName'].'</td>
                                    <td>'.$students['Email'].'</td>
                                    <td>'.$students['Phone'].'</td>
                                    <td>'.$students['Enroll_Number'].'</td>
                                    <td>'.$students['Sdate'].'</td>
                                    <td><a  href="./edit_students.php?id='.$students['id'].'"><i class="fas fa-pen text-info"></i></a><span style="color:white;">---</span><a href="remove_students.php?id='.$students['id'].'"><i class="fas fa-trash text-info"></i></a></td>
                                </tr>';
                                
                                 }; 
                                 
                                 
                                ?>
                              
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
              

            
    </div>
         

   




   
    <?php include('script.php') ?>
</body>
</html>