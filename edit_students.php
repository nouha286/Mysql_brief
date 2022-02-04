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
              
               







   
    <?php include('script.php') ?>
</body>
</html>