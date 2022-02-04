<?php
include('i.php');
    if(isset($_POST['save']))
    {
            $Name = $_POST['Name'];
            $Payment_Schedule= $_POST['Payment_Schedule'];
            $Bill_Number= $_POST['Bill_Number'];
            $Amount_Paid= $_POST['Amount_Paid'];
            $Balance_amount=$_POST['Balance_amount'];
            $Date=$_POST['Date'];

            $sql= " INSERT INTO payments VALUES(NULL, '$Name',' $Payment_Schedule',' $Bill_Number','  $Amount_Paid','$Balance_amount','$Date')";
            if(mysqli_query($conn, $sql))
            {
                echo "<script>window.location.href = './payments.php';</script>";
            }
            else{
                echo "error";
            }
            
    }

?>