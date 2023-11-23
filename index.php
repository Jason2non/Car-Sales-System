<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caspal Automobiles</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1 style="font-weight:bold; color:yellow; ">CASPAL AUTOMOBILES</h1>
            </div>
            <ul class="nav-links">
                <li style="#"><a href="index.php">HOME</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="register.php">REGISTER</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero" style="background-image:url('img/carone.jpg'); background-size:cover;background-repeat:no-repeat;">
            <h1 style="font-family:san-serif; color:black">BUY THE BEST QUALITY USED CARS</h1>
            <!--<div class="search">
                <input type="text" placeholder="Search Any Car to buy">
                <button type="submit">Search</button>
            </div>-->
        </section>
        <section class="about-us">
            <div class="about-us-content">
                <h2 id="home" style="font-family:san-serif; font-size:50px; color: grey">ABOUT US</h2>
                <p style="font-family:san-serif;">Welcome to Caspal Automobiles, your trusted platform for buying and selling pre-owned vehicles.<br>
                Our mission is to provide reliable, affordable vehicles to our clients while<br>
                 ensuring a stress-free buying and selling experience. Feel free to<br>
                 reach out to us or our visit our Offices in Ngara</p>
            </div>
        </section>
    </main>
    <?php
    include('include/footer.php');
    ?>
    <script src="script.js"></script>
</body>
</html>
