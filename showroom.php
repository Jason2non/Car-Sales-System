
<!DOCTYPE html>
<html>
<head>
    <title>CarShow Room</title>
    <link rel="stylesheet" type="text/css" href="CSS/showroom.css">
</head>
<body>
    <header>
        <h1>CASPAL SHOW ROOM</h1>
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="buycar.php">BUY CAR</a></li>
                <li><a href="explorecar.php">EXPLORE CARS</a></li>
                <li><a href="cart.php">CART</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="product-list">
            <!-- Product listings go here -->
            <div class="product">
                <img src="img/car1.png" alt="#">
                <h2>Mazda C X5</h2>
                <p>Price: $15000</p>
            <a href="cart.php"><button>Add to Cart</button></a>
            </div>
            <div class="product">
                <img src="img/cartwo.jpg" alt="#">
                <h2>Nissan</h2>
                <p>Price: $20000</p>
              <a href="cart.php"><button>Add to Cart</button></a>
            </div>
            <div class="product">
                <img src="img/car2.jpg" alt="#">
                <h2>BMW</h2>
                <p>Price: $17000</p>
             <a href="cart.php"><button>Add to Cart</button></a>
            </div>
            <div class="product">
                <img src="img/car3.jpg" alt="#">
                <h2>VOLVO</h2>
                <p>Price: $30000</p>
             <a href="cart.php"><button>Add to Cart</button></a>
            </div>
            <!-- Repeat similar product listings as needed -->
        </section>
    </main>
    
    <footer>
        <p>&copy; 2023 Caspal Automobiles</p>
    </footer>
</body>
</html>