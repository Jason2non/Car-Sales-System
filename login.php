<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Customer</title>
    <link rel="stylesheet" type="text/css" href="css/login2.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="login-form">
        <h1>Login</h1>
        <form id="login-form" action="log.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="button-group">
                <input type="submit" value="submit">
                <button type="button" onclick="window.open('index.php','_self')">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
