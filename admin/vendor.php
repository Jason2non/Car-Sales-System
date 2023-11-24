<!DOCTYPE html>
<html>
<head>
    <title>Vendor Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    text-align: center;
    margin: 0;
    padding: 0;
}

h1 {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

form {
    width: 80%;
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

label {
    display: block;
    margin-top: 10px;
}

input[type="text"],
input[type="email"],
input[type="password"], SELECT{
    width: 90%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #555;
}

    </style>
</head>
<body>
    <h1>Vendor Registration</h1>
    <form id="vendorRegistrationForm" action="vendor.php" method="POST">
         
        <label for="name">Vendor Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="brand_name">Brand Name:</label>
        <select name="brands">
            <option value="BMW">BMW</option>
            <option value="VOLVO">VOLVO</option>
            <option value="NISSAN">NISSAN</option>
            <option value="TOYOTA">TOYOTA</option>       
            <option value="MERCEDES">MERCEDES</option>
        </select>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        

        <input type="submit" value="Register Vendor">
        <button onclick="window.open('vendorlogin.php','_self')">Back</button>
    </form>

    <script src="script.js"></script>
</body>
</html>
<!--Add the vendor code to database-->
<?php
require('../connect.php');
if(isset($_POST['password'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $brandname=$_POST['brands'];
    $pass = $_POST['password'];

    $conn = mysqli_query($sql, "INSERT INTO `vendor` (`ID`,`Vname`,`Vemail`,`brandname`,`Vpassword`)VALUES('','$name','$email','$brandname','$pass')") or die(mysqli_error($sql));
    if($conn){
        echo "<script>alert(\"Vendor added successfully\")</script>";
    }
    else{
        //echo "Theres an error";
    }
}
?>

