<?php
session_start();
require('../connect.php');
if(isset($_POST['email']) && isset($_POST['password'])){
    $username = $_POST['email'];
    $password = $_POST['password'];


    $stmt = mysqli_query($sql, "SELECT `Vemail`, `Vpassword` FROM `vendor` WHERE `Vemail`='$username' AND `Vpassword`='$password'")or die(mysqli_error($sql));
    $result = mysqli_fetch_array($stmt);
    if($result){
        //echo "'working";
        header('location: Vendordashboard.php');
    }
    else{
        echo "<script>alert(\"Wrong Credentials, Contact the Administrator\")</script>";
    }
}
else{

}
?>