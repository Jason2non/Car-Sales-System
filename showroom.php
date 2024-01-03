<?php
require('connect.php');
session_start();
$fetch =  mysqli_query($sql,"SELECT * FROM `car` ORDER BY `ID` asc")or die(mysqli_error($sql));
if(isset($_POST['add'])){
    if(isset($_SESSION['cart'])){
        $item_id = array_column($_SESSION['cart'], "ID");
        if(!in_array($_GET['ID'], $item_id)){
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id'     => $_GET['ID'],
                'item_name'      => $_POST['hidden_name'],
                'item_quantity'  => $_POST['quant'],
                'item_model'     => $_POST['hidden_model'],
                'item_price'     => $_POST['hidden_price'],
                'item_desc'      => $_POST['hidden_decrip'],
            );
            $_SESSION['cart'][$count]=$item_array;
            echo "<script>window.location=\"showroom.php\"</script>";
        }
        else{
            echo "Product already added into the cart";
        }
    }
    else{
        $item_array = array(
                'product_id'    => $_GET['ID'],
                'item_name'     => $_POST['hidden_name'],
                'item_quantity' =>  $_POST['quant'],
                'item_model'    => $_POST['hidden_model'],
                'item_price'    => $_POST['hidden_price'],
                'item_desc'     => $_POST['hidden_decrip'],
            );
            $_SESSION['cart'][0]=$item_array;
    }
}
 if(isset($_GET['action'])){
        if($_GET['action'] == "delete"){
            foreach ($_SESSION['cart'] as $key => $value) {
                if($value['product_id'] == $_GET['ID']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert(\"Product Removed\")</script>";
                }
                # code...
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>CarShow Room</title>
    <link rel="stylesheet" type="text/css" href="css/showroom.css">
    <link rel="stylesheet" type="text/css" href="css/bot\bot/css/bootstrap.css">
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
            <form action="showroom.php?action=add&ID=<? echo $row['ID']?>" method="POST">
                    <div class="product" style="background-color: ; color:black">
                        <img src="admin/uploads/<? echo $row['img'] ?>" alt="Loading..." height="200px"><br><br><br>
                        <h2 style="font-family:C059; font-size: 15px; color: black"><? echo strtoupper($row['model']) ?> <? echo strtoupper($row['carname']) ?></h2>
                        <label>Quantity</label><br>
                        <input type="number" name="quant" class="form-control" value="1"><br>
                        <p style="color: black; font-family: DejaVu Sans;">Price: $ <? echo number_format($row['price'],2)?></p>
                        <input type="hidden" name="hidden_name" value="<? echo $row['carname']?>">
                        <input type="hidden" name="hidden_model" value="<? echo $row['model']?>">
                        <input type="hidden" name="hidden_price" value="<? echo $row['price']?>">
                        <input type="hidden" name="hidden_decrip" value="<? echo $row['descr']?>">
                        <input type="submit" name="add" value="Add to cart" class="btn btn-warning btn-block">
                        
                    </div>
            </form>
            <?php
              }
        ?>
        <div style="clear:both"></div>
        <h3 class="title2">Shoping Cart Details</h3>
        <div class="table">
         <table class="table table-bordered table-stripped">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
        </div>
        <?php
            if(!empty($_SESSION['cart'])){
                $total = 0;
                foreach ($_SESSION['cart'] as $key => $value) {
        ?>
        <tr>
            <td><? echo $value['item_name']?></td>
            <td><? echo $value['item_quantity']?></td>
            <td><? echo number_format($value['item_price'])?></td>
            <td><? echo number_format($value['item_quantity'] * $value['item_price'],2)?></td>
            <td><a href="showroom.php?action=delete&ID=<? echo $value['product_id']?>" class="btn btn-danger btn-block">Remove</a></td>
        </tr>
        <?php
    }
    ?>
    <tr>
           <td colspan="2"></td>
            <td>Total</td>
            <td><?php echo number_format($total = $total + $value['item_quantity'] * $value['item_price'],2)?></td>
            <td><a href="showroom.php?action=delete&ID=<? echo $row['ID']?>" class="btn btn-info btn-block" style="color:white;">Checkout</a></td>
    </tr>
<?php
 }
?>
        <!--<tr>
            <td colspan="2"></td>
            <td>Total</td>
            <td><?php //echo number_format($total = $total + $value['item_quantity'] * $value['item_price'],2)?></td>
            <td><a href="showroom.php?action=delete&ID=<? echo $row['ID']?>" class="btn btn-info btn-block" style="color:white;">Checkout</a></td>
        </tr>-->
</table>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2023 Caspal Automobiles</p>
        <?php ?>
    </footer>
</body>
</html>
