<?php
require_once('connect.php');
if(isset($_POST['email']) && isset($_POST['password'])){
$email = $_POST['email'];
$pass = $_POST['password'];

    /*$sql= "SELECT `email`, `password` FROM `customer` WHERE email='$email' AND `password`='$pass'";
    $result=mysqli_query($con, $sql);
    $stmt = mysqli_fetch_array($result);*/
    $sql = mysqli_query($sql, "SELECT `email`,`password` FROM `customer` WHERE `email`='$email' AND `password`='$pass'")or die(mysqli_error($con));
    $result = mysqli_fetch_array($sql);
    if($result){
        echo "Login successful";
        header("Location: showroom.php");
    }
    else{
        echo "Unsuccessful";
    }
    
}
else{
    echo "Error in using the collecting the database";
}
?>