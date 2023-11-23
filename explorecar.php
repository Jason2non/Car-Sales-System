<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        #car-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            margin: 20px auto;
        }

        .car-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
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
   <section>
    <div id="car-container">
         <div class="car-details">
                <img src="img/carB.jpg" alt="Car 1">
                <h3>Car Model 1</h3>
                <p>Price: $30,000</p>
                <p>Year: 2022</p>
            </div>
            <div class="car-details">
                <img src="img/carA.jpg" alt="Car 2">
                <h3>Car Model 2</h3>
                <p>Price: $17,000</p>
                <p>Year: 2020</p>
            </div>
             
            
            <div class="car-details">
            <img src="img/carC.jpg" alt="Car 2">
                <h3>Car Model 3</h3>
                <p>Price: $28,000</p>
                <p>Year: 2016</p>
            </div>
            
            <div class="car-details">
            <img src="img/carD.jpg" alt="Car 2">
                <h3>Car Model 4</h3>
                <p>Price: $40,000</p>
                <p>Year: 2010</p>
            </div>
          
            <div class="car-details">
                <img src="img/carE.jpg" alt="Car 2">
                <h3>Car Model 5</h3>
                <p>Price: $25,000</p>
                <p>Year: 2019</p>
            </div>
            
            
            <div class="car-details">
                <img src="img/carE.jpg" alt="Car 2">
                <h3>Car Model 6</h3>
                <p>Price: $30,000</p>
                <p>Year: 2017</p>
            </div>
           
            
            <div class="car-details">
                <img src="img/carF.jpg" alt="Car 2">
                <h3>Car Model 7</h3>
                <p>Price: $15,000</p>
                <p>Year: 2021</p>
            </div>
        </div>

        <!-- Add more car cards as needed -->

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
