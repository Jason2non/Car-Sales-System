<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel-Uesd cars</title>
    <style>
        /* Reset default margin and padding */
body, h1{
    margin: 0;
    padding: 0;
    
}

/* Body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
     
}

/* Registration form styles */
header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    
}

header h1 {
    font-size:24px
    font-size: 24px;
    margin-bottom: 20px;
}

nav ul{
    list-style: none;
     
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a{
    color: #fff;
    text-decoration: none;
    font-weight: bold;
     
}

 main {
     
    padding: 20px;
     
}

footer {
    background-color: #333;
    color:#fff;
    text-align:center;
    padding: 10px 0;
}

    </style>
     
</head>
<body>
    <header>
      <h1>ADMIN PANEL</h1>
      <nav>
        <ul>
            <li><a href="dashboard.php">DASHBOARD</a></li>
            <li><a href="managecars.php">MANAGE CARS</a></li>
            <li><a href="manageusers.php">MANAGE USERS</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>

    </header>
     <main>
        <!--Your admin content goes here-->
     </main>
     <footer>
        <!--Footer content goes here-->
     </footer>
</body>
</html>


