<?php
    require_once('function/function.php');
    logg();
    $id=$_GET['delet'];
        $del="DELETE FROM  covidtrack WHERE id='$id'";

        if (mysqli_query($con,$del)) {
           header('Location:wballcovidcase.php');
        }else{
            echo "Failed To deletE";
        }


?>