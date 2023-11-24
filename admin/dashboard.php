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
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Cars</a></li>
            <li><a href="vendor.php">Vendors</a></li>
            <li><a href="#">Orders</a></li>
            <!-- Add more menu items as needed -->
        </ul>
    </aside>

    <main class="content">
        <header>
            <h1>Admin Dashboard</h1>
            <nav>
                <ul>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a id="changePasswordLink" href="#" style="text-decoration:none; color:white;">Change Admin Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
        <section class="dashboard-content">
            <!-- Dashboard content goes here -->
        </section>
        </html>

    <div id="changePasswordModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2 style="text-align:center">Change Password</h2>
            <form id="passwordChangeForm" action="changepassword.php" method="post">
                <label for="oldPassword">Old Password:</label><br>
                <input type="password" id="oldPassword" name="opass" required><br>

                <label for="newPassword">New Password:</label><br>
                <input type="password" id="newPassword" name="password"oninput="passconfirm()"required><br>

                <label for="confirmNewPassword">Confirm New Password:</label><br>
                <input type="password" id="confirmNewPassword" oninput="passconfirm()" required><br><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <script>
        // JavaScript to open and close the pop-up
        document.getElementById("changePasswordLink").addEventListener("click", function () {
            document.getElementById("changePasswordModal").style.display = "block";
        });

        document.getElementById("closeModal").addEventListener("click", function () {
            document.getElementById("changePasswordModal").style.display = "none";
        });

        // Close the pop-up if the user clicks outside the modal
        window.addEventListener("click", function (event) {
            if (event.target === document.getElementById("changePasswordModal")) {
                document.getElementById("changePasswordModal").style.display = "none";
            }
        });
        function passconfirm(){
            var passone = getElementByid("newPassword").value;
            var passtwo = getElementByid("ConfirmNewPassword").value;
            if(passone != passtwo){
                alert("Password don't match");
            }
            else{

            }
            
        }
    </script>
    </main>
</body>


