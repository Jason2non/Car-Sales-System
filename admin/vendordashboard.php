<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.sidebar {
    background-color: #333;
    color: #fff;
    width: 250px;
    position: fixed;
    height: 100%;
    overflow: auto;
}

.sidebar h2 {
    padding: 20px;
    text-align: center;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px;
    text-align: center;
}

.sidebar a {
    color: #fff;
    text-decoration: none;
    display: block;
}

.sidebar a:hover {
    background-color: #555;
}

.content {
    margin-left: 250px;
    padding: 20px;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

header h1 {
    font-size: 24px;
}

nav ul {
    list-style: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav a {
    color: #fff;
    text-decoration: none;
}

.dashboard-content {
    padding: 20px;
}
#changePasswordLink{
    text-decoration: underline;
    color: #0074d9;
    cursor: pointer;
}

/* Style for the modal background */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
}

/* Style for the modal content */
.modal-content {
    background-color: #fff;
    width: 50%;
    max-width: 400px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Style for the close button */
.close {
    color: #000;
    float: right;
    font-size: 20px;
    cursor: pointer;
}

.close:hover {
    color: #ff0000;
}

    </style>
</head>
<body>
    <aside class="sidebar">
        <h2>VENDOR PANEL</h2>
        <ul>
            <li><a href="#">DASHBOARD</a></li>
            <li><a href="addcar.php">ADDCAR</a></li>
            <li><a href="removecar.php">REMOVECAR</a></li>
            <li><a href="#">VIEW PAYMENTS</a></li>
            <!-- Add more menu items as needed -->
        </ul>
    </aside>

    <main class="content">
        <header>
            <h1>VENDOR DASHBOARD</h1>
            <nav>
                <ul>
                     
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
        <section class="dashboard-content">
            <!-- Dashboard content goes here -->
        </section>
        </html>

     
            
        
    
    </main>
</body>


