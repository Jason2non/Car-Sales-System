<?php
require('../connect.php');
if(isset($_POST['password']) && isset($_POST['opass'])){
    $newpass = ($_POST['password']);
    $opass = ($_POST['opass']);

    $con = mysqli_query($sql,"SELECT * FROM `admin` WHERE `password`='$opass'")or die(mysqli_error($con));
    if(!$con){
        echo "<script>alert(\"Your old password is wrong\")</script>";
    }
    else{
        $con_two = mysqli_query($sql,"UPDATE `admin` SET `password`='$newpass'")or die(mysqli_error($con));
        if($con_two){
            echo "<script>alert(\"Password updated\")</script>";
            header('location: dashboard.php');
        }
        else{
            echo "Theres an error";
        }
    }
}
else{
    echo "PAGE NOT FOUND";
}
?>