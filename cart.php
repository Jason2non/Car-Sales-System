<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        #cart-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cart-item {
            border-bottom: 1px solid #ddd;
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        .cart-item img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
        }

        .cart-total {
            font-weight: bold;
            margin-top: 10px;
            text-align: right;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <h1>SHOPPING CART</h1>
    </header>

    <div id="cart-container">
        <div class="cart-item">
            <img src="img/car3.jpg" alt="#">
            <div>
                <h3> </h3>
                <p>Price: $30000</p>
                <p>VOLVO</p>
            </div>
        </div>
    <div class="cart-total">
            <p>Total: $15000</p>
        </div>

        <button>CHECKOUT</button>
    </div>

</body>
</html>
