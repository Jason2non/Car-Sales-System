<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Payment</title>
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
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="tel"],
        input[type="email"],
        select {
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
    <h1>CAR PAYMENT</h1>
    <form action="process_payment.php" method="POST">
        <label for="cardNumber">Card Number:</label>
        <input type="text" id="cardNumber" name="cardNumber" required>

        <label for="expirationDate">Expiration Date:</label>
        <input type="text" id="expirationDate" name="expirationDate" placeholder="MM/YYYY" required>

        <label for="cvv">CVV:</label>
        <input type="number" id="cvv" name="cvv" required>

        <label for="cardHolderName">Cardholder Name:</label>
        <input type="text" id="cardHolderName" name="cardHolderName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>

        <label for="address">Billing Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>

        <label for="zipCode">ZIP Code:</label>
        <input type="text" id="zipCode" name="zipCode" required>

        <input type="submit" value="Make Payment">
    </form>
</body>
</html>
