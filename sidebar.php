<?php include('i.php');
 
 
 
 

 
      session_start();
     
      

?>


<div class="sidebar col-2 mx-auto min-vh-100">
            <div class="my-5 d-none d-xxl-block ">
                <h1 class="border-start ms-3 border-4 border-info">E-classe</h1>
        
                <div class="card mx-auto d-block mt-5" style="width: 70%; border: none;">
                    <img src="5dacd6c5391495cfe8fc3abf313e15ce.jpg" class="rounded-circle mx-auto d-block "  alt="Cinque Terre">
                    <div class="card-body">
                        <h4 class="card-text text-center text-dark" ><?php echo  $_SESSION['userName']; ?></h4>
                        <h5 class="card-text text-center " style="color: #00C1FE; ">Admin</h5>  
                    </div>
                </div>
            </div>
            <div>
                <div class="list-group  mx-auto" style="width: 70%; background:#FAFFC1;">
                    <a href="home.php" class="list-group-item list-group-item-action <?php echo $active1; ?> text-center rounded" style="border: none;<?php echo $bac1; ?>" <?php echo $area1; ?>>
                        <span><i class="fas fa-home"></i></span><span class="d-none d-lg-block">Home</span> 
                    </a>
                    <a href="Courses.php" class="list-group-item list-group-item-action text-center rounded" style=" font-weight: 500; border: none; background:#FAFFC1;" ><span class=""><i class="far fa-bookmark"></i></span><span class="d-none d-lg-block">Course</span></a>
                    <a href="Students.php" class="list-group-item list-group-item-action   rounded <?php echo $active2; ?>  text-center" style=" font-weight: 500; border: none;<?php echo $bac2; ?>" <?php echo $area2; ?>><span class=""><i class="fas fa-graduation-cap"></i></span><span class="d-none d-lg-block" >Students</span></a>
                    <a href="payments.php" class="list-group-item list-group-item-action  rounded <?php echo $active3; ?> text-center" style=" font-weight: 500; border: none; <?php echo $bac3; ?>" <?php echo $area3; ?>><span class=""><i class="fas fa-dollar-sign"></i></span><span class="d-none d-lg-block">Payment</span></a>
                    <a href="" class="list-group-item list-group-item-action text-center  rounded" style=" font-weight: 500; border: none; background:#FAFFC1;"><span class=""><i class="fas fa-file-invoice"></i></span><span class="d-none d-lg-block">Report</span></a>
                    <a href="#" class="list-group-item  list-group-item-action text-center  rounded" style=" font-weight: 500; border: none; background:#FAFFC1;"><span class=""><i class="fas fa-sliders-h"></i></span><span class="d-none d-lg-block"> Settings</span></a>
                    <a href="SignIN.php" class="list-group-item  list-group-item-action text-center rounded" style=" font-weight: 500; border: none; background:#FAFFC1;"><span class="d-none d-lg-block" style="color: black; "> Log out</span><i class="fas fa-sign-out-alt"></i></a>
                  </div>
            </div>
            
        
            
</div>
