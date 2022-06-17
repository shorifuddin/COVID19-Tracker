<?php
    require_once('function/function.php');
    logg();
    $id=$_GET['delet'];
        $del="DELETE FROM wbsym WHERE id='$id'";

        if (mysqli_query($con,$del)) {
           header('Location:index.php');
        }else{
            echo "Failed To delet";
        }


?>