<?php
    require_once('function/function.php');
    logg();
    $id=$_GET['delet'];
        $del="DELETE FROM websms WHERE web_id='$id'";

        if (mysqli_query($con,$del)) {
           header('Location:index.php');
        }else{
            echo "Failed To delet";
        }


?>