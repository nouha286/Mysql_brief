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
<body >
    <div class="row"  style="height:1050px;"  >
    <?php include('i.php') ?>
            <!--sidebar-->
          <?php 
            $active1="";
            $active2="";
            $active3="active";

            $area1="";
            $area2="";
            $area3="aria-current=\"true\"";

            
            $bac1="background:#FAFFC1;";
            $bac2="background:#FAFFC1;";
            $bac3="background:#00C1FE;";
          include('sidebar.php') 
          ?>
            <!--body-->

            <div class="col-10" >

            <?php include('navbar.php') ?>
                <div class="row px-4 bg-light">

                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                          <a class="rounded btn btn-primary btn-lg " style="border: none;color: white;  background-color:#00C1FE;class=" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus-square" style="background:#00C1FE"></i>Payment Details</a>
                          <i class="fas fa-sort" style="color:#00C1FE ;"></i>
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
                    <form method="POST" action="./addpayments.php">

                            <div class="mb-3">
                            <label for="N" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="Name" id="N">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Payment Schedule:</label>
                            <input type="email" class="form-control" name="Payment_Schedule" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>

                        <div class="mb-3">
                            <label for="P" class="form-label">Bill Number:</label>
                            <input type="text" name="Bill_Number" class="form-control" id="P">
                        </div>
                        
                        <div class="mb-3">
                            <label for="E" class="form-label">Amount Paid:</label>
                            <input type="text" name="Amount_Paid" class="form-control" id="E">
                        </div>

                        <div class="mb-3">
                            <label for="D" class="form-label">Balance amount:</label>
                            <input type="text" name="Balance_amount" class="form-control" id="D">
                        </div>

                        <div class="mb-3">
                            <label for="D" class="form-label">Date</label>
                            <input type="date" name="Date" class="form-control" id="D">
                        </div>


                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                </form>
      </div>
      
    </div>
  </div>
</div>
               <div class="row px-4 bg-light" style="">
                    <hr style="color: gray; width: 100%;">
                     <div style="overflow-x:auto;">
                            <table class="table table-striped text-center ">
                                <thead>
                                <tr style="color: gray;">
                                    <th>Name</th>
                                    <th>Payment Schedule</th>
                                    <th>Bill Number</th>
                                    <th>Amount Paid</th>
                                    <th>Balance amount</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                                </thead>
                    
                                <tbody>
                                <?php
                                 $sql="SELECT *  FROM payments";
                                 $res= mysqli_query($conn, $sql);
                                 while($payments= mysqli_fetch_assoc($res))
                                 {
                                    echo '<tr>
                                    <td>'.$payments['Name'].'</td>
                                    <td>'.$payments['Payment_Schedule'].'</td>
                                    <td>'.$payments['Bill_Number'].'</td>
                                    <td>'.$payments['Amount_Paid'].'</td>
                                    <td>'.$payments['Balance_amount'].'</td>
                                    <td>'.$payments['Date'].'</td>
                                    <td></td>
                                </tr>';
                                 }
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