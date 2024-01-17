<?php
require('connect.php');
session_start();
if(isset($_POST['add'])){
    $id  = $_POST['ID'];
    $name  = $_POST['hidden_name'];
    $model = $_POST['hidden_model'];
    $image = $_POST['hidden_image'];
    $quant = $_POST['quant'];
    $price = $_POST['hidden_price'] * $_POST['quant'];
    $descr = $_POST['hidden_decrip'];

    $fetch_data = mysqli_query($sql, "SELECT count(*) FROM `car` WHERE `ID`='$id'")or die("Cannot get into the database error!");
    if(mysqli_num_rows($fetch_data) > 0){
        $insert = mysqli_query($sql,"INSERT INTO `checkout` (`ID`,`p_name`,`p_image`,`p_quant`,`p_model`,`p_price`,`p_desc`)VALUES('','$name','$image','$quant','$model','$price','$descr')")or die("Theres an error: ".$sql);
        echo "<div class=\"alert alert-success\" style=\"text-align:center; margin-top:5px;\">Product added</div>";
    }
    else{
        
        echo "Product already added";
    }
}
$fetch_check = mysqli_query($sql, "SELECT * FROM `checkout`")or die("Error fetching data");
$fetch_array = mysqli_num_rows($fetch_check);
//$array = count($fetch_array);


//$array = mysqli_fetch_array($fetch_check);
//$array = mysqli_num_rows($fetch_check);
?>
<!DOCTYPE html>
<html>
<head>
    <title>CarShow Room</title>
    <link rel="stylesheet" type="text/css" href="css/showroom.css">
    <link rel="stylesheet" type="text/css" href="css/bot\bot/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bot\bot/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>CASPAL SHOW ROOM</h1>
        <nav>
            <ul>
                <li><a href="index.php">| Home |</a></li>
                <li><a href="buycar.php">| Buy Car |</a></li>
                <li><a href="explorecar.php">| Explore Cars |</a></li>
                <li><a href="cart.php">| Cart <sup><? echo $fetch_array ?></sup> |</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="product-list">
                  <?php
                      $fetch =  mysqli_query($sql,"SELECT * FROM `car` ORDER BY `ID` asc")or die(mysqli_error($sql));
                      while($row = mysqli_fetch_array($fetch))

                    {?>
            <!-- Product listings go here -->
            <form action="showroom.php" method="POST">
                    <div class="product" style="background-color: ; color:black">
                        <img src="admin/uploads/<? echo $row['img'] ?>" alt="Loading..." height="200px"><br><br><br>
                        <h2 style="font-family:C059; font-size: 15px; color: black"><? echo strtoupper($row['model']) ?> <? echo strtoupper($row['carname']) ?></h2>
                        <label>Quantity</label><br>
                        <input type="number" name="quant" class="form-control" value="1"><br>
                        <p style="color: black; font-family: DejaVu Sans;">Price: $ <? echo number_format($row['price'],2)?></p>
                        <input type="hidden" name="ID"    value="<? echo $row['ID']?>">
                        <input type="hidden" name="hidden_name"   value="<? echo $row['carname']?>">
                        <input type="hidden" name="hidden_model"  value="<? echo $row['model']?>">
                        <input type="hidden" name="hidden_image"  value="<? echo $row['img']?>">
                        <input type="hidden" name="hidden_price"  value="<? echo $row['price']?>">
                        <input type="hidden" name="hidden_decrip" value="<? echo $row['descr']?>">
                        <input type="submit" name="add" value="Add to cart" class="btn btn-warning btn-block">
                        
                    </div>
            </form>
            <?php
              }
        ?>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2023 Caspal Automobiles</p>
        <?php ?>
    </footer>
</body>
</html>
