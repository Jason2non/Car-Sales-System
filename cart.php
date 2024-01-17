<?php
session_start();

require('connect.php');

/*if(isset($_POST['add'])){
    if(isset($_SESSION['cart']))
    {
        $item_id = array_column($_SESSION['cart'], "ID");
        if(!in_array($_POST['ID'], $item_id))
        {
           $count = count($_SESSION['cart']);
           $message = "<div class=\"alert alert-success\" style=\"text-align:center; \">Product added</div>";
           $items_arr = array
            (
                'product_id' => $_POST['ID'],
                'item_name'  => $_POST['hidden_name'],
                'item_image' => $_POST['hidden_image'],
                'item_quant' => $_POST['quant'],
                'item_model' => $_POST['hidden_model'],
                'item_price' => $_POST['hidden_price'],
                'item_desc'  => $_POST['hidden_decrip'],
   
            );
            $_SESSION['cart'][$count] = $items_arr;
            echo "<script>alert(\"Product added\")</script>";
            echo "<script>window.location=\"showroom.php\"</script>";
        }
        else
        {
            echo "<script>alert(\"Product already added\")</script>";

        }
    }
    else
    {
            $items_arr = array
            (
            'product_id' => $_POST['ID'],
            'item_name'  => $_POST['hidden_name'],
            'item_image' => $_POST['hidden_image'],
            'item_quant' => $_POST['quant'],
            'item_model' => $_POST['hidden_model'],
            'item_price' => $_POST['hidden_price'],
            'item_desc'  => $_POST['hidden_decrip'],

            );
            $_SESSION['cart'][0] = $items_arr;
    }
}
if (isset($_GET['action'])){
    if($_GET['action'] == 'delete'){
        foreach ($_SESSION['cart'] as $key => $value) {
            if($value['product_id'] == $_GET['ID']){
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bot\bot/css/bootstrap.css">
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
        img{
            border-radius: 5px;
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
        nav{
            display: flex;
            justify-content: center;
            margin-top: 5px;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
            font-family: deja vu;
            font-weight: bold;
        }

        nav a {
            color: #333;
            text-decoration: none;
        }
        nav a:hover{
            border-bottom: 1.5px solid;
            border-color: #333;
    </style>
</head>
<body>

    <header>
        <h1 style="font-family: deva ju">SHOPPING CART</h1>
    </header>
     <nav class="nav nav-bar">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="showroom.php">BUY CAR</a></li>
                <li><a href="explorecar.php">EXPLORE CARS</a></li>
                <li><a href="cart.php">CART</a></li>
            </ul>
    </nav>
    </div>
    <div class="table responsive" style="clear: both;">
        <!--<h1 class="text-center">Shopping Wallet</h1>-->
        <table class="table table-bordered table-stripped" style="width: 90%; margin-left: 5%; margin-top:3%;">
            <tr style="text-align: right; font-family: deja vu; font-size: 15px">
                <th width="30%" style="text-align: left; font-family: deja vu;">IMAGE</th>
                <th width="15%">PRODUCT NAME</th>
                <th width="11%">QUANTITY</th>
                <th width="30%">TOTAL PRICE</th>
                <th width="50%"></th>
            </tr>
            <?php 
            $fetch = mysqli_query($sql, "SELECT * FROM `checkout`")or die("This is the error". mysqli_error($sql));
            while ($row = mysqli_fetch_array($fetch)) {
              /* if(!empty($_SESSION['cart']))
               {
                $total = 0;
                foreach ($_SESSION['cart'] as $key => $value) {
                    */
            ?>
            <tr style="">
                <td><img src="admin/uploads/<? echo $row['p_image']?>" height="40px" width="60px"></td>
                <td style="font-family: deja vu; font-size: 15px;text-align: right"><? echo strtoupper($row['p_name'])?></td>
                <td style="font-family: deja vu;text-align: right"><? echo $row['p_quant']?></td>
                <td style="font-family: deja vu; font-size: 17px;text-align: right">&dollar; <? echo number_format($row['p_price'],2)?></td>
                <td><a href="cart.php?action=delete&ID=<?echo $value['product_id']?>" class="btn btn-danger btn-block">Remove Item</a></td>
            </tr>
            <?php
            //$total = $total + $value['item_price']*$value['item_quant'];
            $total = 0;
            $total = $total + $row['p_price'];

        }
             
            ?>
            <tr>
                <td colspan="3" style="text-align: right; font-weight: bold; font-size: 20px;">Total</td>
                <td style="text-align: right;font-family: deja vu; font-size: 17px;">&dollar; <?php echo number_format($total,2) ?></td>
                <td colspan="5" style="text-align: right;"><a href="checkout.php" class="btn btn-warning">Checkout</a></td>
            </tr>
            <tr>
                
            </tr>
            <?php
        ?>
        </table>
    <div style="margin-bottom: 100px">
        <!--<?php// include('include/footer.php');?>-->
    </div>

</body>
</html>

