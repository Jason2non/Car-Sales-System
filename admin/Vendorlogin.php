<!DOCTYPE html>
<html>
<head>
    <title>Vendor Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    text-align: center;
    margin: 0;
    padding: 0;
}

.login-container {
    width: 80%;
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    margin-top: 50px;
}

h1 {
    color: #333;
}

form {
    text-align: left;
}

label {
    display: block;
    margin-top: 10px;
    color: #333;
}

input[type="email"],
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
    <div class="login-container">
        <h1>VENDOR</h1>
        <form id="vendorLoginForm" action="vend.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </div>

    <!--<script src="script.js"></script>-->
 </body>
</html>
<!--Add vendor code-->
