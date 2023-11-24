<!DOCTYPE html>
<html>
<head>
    <title>Remove a Car</title>
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

input[type="number"] {
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
    <h1>REMOVE CAR</h1>
    <form action="process_car_removal.php" method="POST">
        <label for="carId">Car ID:</label>
        <input type="number" id="carId" name="carId" required>

        <input type="submit" value="Remove Car">
    </form>
</body>
</html>
