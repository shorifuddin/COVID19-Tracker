<?php
    require_once('function/function.php');
    logg();
    $id=$_GET['delet'];
        $del="DELETE FROM coninfo WHERE con_id='$id'";

        if (mysqli_query($con,$del)) {
           header('Location:wbaddcon.php');
        }else{
            echo "Failed To delet";
        }


?>