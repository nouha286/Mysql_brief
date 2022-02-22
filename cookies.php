<?php  
       
    if(!isset($_COOKIE['e_password']) && !isset($_COOKIE['email']))
        {
            echo "<script>window.location.href = './SignIN.php';</script>";
        }
        
?>