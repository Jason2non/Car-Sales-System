<?php
require('connect.php');
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password']))
{
   $fname = $_POST['firstname'];
   $lname = $_POST['lastname'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $pass = $_POST['password'];

   $statement = mysqli_query($sql, "INSERT INTO `customer` (`fname`,`sname`,`phone`,`email`,`password`) VALUES('$fname','$lname','$phone','$email','$pass')") or die(mysqli_error($sql));
   if($statement){
    echo "<h1 style=\"color:blue\">Registered Successfully!</h1>";
    header('Location: login.php');
   }
   else{
    echo "Data not sent";
   }
}
else{
    echo "Theres is an error";
}
?>