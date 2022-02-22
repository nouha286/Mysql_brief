<?php  
       
    if(!isset($_COOKIE['e_password']) && !isset($_COOKIE['email']))
        {
            header('location:SignIN.php');
        }
        
?>