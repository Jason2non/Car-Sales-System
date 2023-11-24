<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
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
input[type="password"] {
    width: 100%;
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
    <h1>Admin login</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Register Admin">
    </form>
</body>
</html>
<?php
require('../connect.php');
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $collect = mysqli_query($sql,"SELECT `username`, `password` FROM `admin` WHERE `username`='$username' AND `password`='$password'")or die(mysqli_error($sql));
    $result = mysqli_fetch_array($collect);
    if($result){
        echo "Login successiful";
        header('Location: admin.php');
    }
    else{
        
    }
}