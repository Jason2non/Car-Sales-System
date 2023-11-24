<!DOCTYPE html>
<html>
<head>
    <title>Add a Car</title>
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
    font-weight:bold;
}

input[type="text"],
input[type="number"],
textarea, select {
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
    <h1>ADD A CAR</h1>
    <form action="caradd.php" method="POST">
        <label for="make">Car Name</label>
        <input type="text" id="make" name="name" required>
        <label for="year">Model:</label>
         
        <select name="model">
            <option value="BMW">BMW</option>
            <option value="VOLVO">VOLVO</option>
            <option value="NISSAN">NISSAN</option>
            <option value="TOYOTA">TOYOTA</option>       
            <option value="MERCEDES">MERCEDES</option>
        </select>

        <label for="year">Year:</label>
        <input type="date" id="year" name="year" >

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" >

        <label for="description">Description:</label>
        <textarea id="description" name="description" ></textarea>

        <label for="image">Image URL:</label>
        <input type="file" id="image" name="image" required><br><br>

        <input type="submit" name="submit" value="Add Car">
    </form>
</body>
</html>
