<?php
require('connect.php');
session_start();
$fetch =  mysqli_query($sql,"SELECT * FROM `car`")or die(mysqli_error($sql));

?>
<!DOCTYPE html>
<html>
<head>
    <title>CarShow Room</title>
    <link rel="stylesheet" type="text/css" href="css/showroom.css">
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
                  <?php while($row = mysqli_fetch_array($fetch))
    {?>
            <!-- Product listings go here -->
            <div class="product">
                <img src="<? echo $row['img'] ?>" alt="This is an Image">
                <h2><? echo $row['carname'] ?></h2>
                <p>Price: $ <? echo admin/upload/$row['price']?></p>
            <a href="cart.php"><button>Add to Cart</button></a>
            </div>
            <!--<div class="product">
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
            </div>-->
            <?php
              }
          //}
        ?>
            <!-- Repeat similar product listings as needed -->
        </section>
    </main>
    
    <footer>
        <p>&copy; 2023 Caspal Automobiles</p>
    </footer>
</body>
</html>
