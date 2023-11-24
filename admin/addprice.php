<!DOCTYPE html>
<html>
<head>
    <title>Add a Car</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Your existing CSS styles from the previous example */

/* Additional styles for the new "price" input field */
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Additional styles for the "price" label */
label[for="price"] {
    display: block;
    margin-top: 10px;
}
label{
    font-weight:bold;
}

    </style>
</head>
<body>
    <h1>Add Price</h1>
    <form action="process_car.php" method="POST">
        <label for="make">Make:</label>
        <input type="text" id="make" name="make" required><br><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name "model" required><br><br>

        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="image">Image URL:</label>
        <input type="text" id="image" name="image" required>

        <input type="submit" value="Add Car">
    </form>
</body>
</html>
