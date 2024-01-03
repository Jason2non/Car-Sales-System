<?php
session_start();
require('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/fa/electric-car.png">
    <link rel="stylesheet" type="text/css" href="css/bot\bot/css/bootstrap.css">
    <title>Explore Cars</title>
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

        .car-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            margin: 25px auto;
        }
        .car-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px 30px 20px;
            width: 300px;
        }

        .car-card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .car-details {
            margin-top: 15px;
            text-align: center;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <h1>EXPLORE CARS</h1>
    </header>
 <main>
   <section class="car-container">
           <div class="card" style="width: 18rem;">
             <img src="img/mer.jpg" class="card-img-top" height="250px" alt="...">
                 <div class="card-body">
                    <h5 class="card-title">Mercedes Benz</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="merc.php" class="btn btn-primary btn-block">Mercedes Benz</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
             <img src="img/bwm.jpg" class="card-img-top" height="250px" alt="...">
                 <div class="card-body">
                    <h5 class="card-title">BMW</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="bmw.php" class="btn btn-primary btn-block">BMW</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
             <img src="img/carQ.jpg" class="card-img-top" height="250px" alt="...">
                 <div class="card-body">
                    <h5 class="card-title">TOYOTA</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="toyot.php" class="btn btn-primary btn-block">TOYOTA</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
             <img src="img/carV.jpg" class="card-img-top" height="250px" alt="...">
                 <div class="card-body">
                    <h5 class="card-title">VOLVO</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="volv.php" class="btn btn-primary btn-block">VOLVO</a>
                </div>
            </div>
    </section>
 </main>
    <section>   
        <div class="footer">
         <p>&copy; 2023 Caspal Cars. All rights reserved.</p>
        </div>
    </section>
</body>
</html>
