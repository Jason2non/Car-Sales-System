<?php
require('../connect.php');


if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['model']) && isset($_POST['year']) && isset($_POST['price']) && isset($_POST['description']))
 {
    $car_nam  = $_POST['name'];
    $car_model = $_POST['model'];
    $car_year  = $_POST['year'];
    $car_price = $_POST['price'];
    $car_description = $_POST['description'];


    //$carimg = isset($_FILES['carimage']['name']);
    //print_r($carimg);
    //$new_path = 'uploads/'.$carimg;
    //move_uploaded_file($carimg, $new_path);
    $car_name  = isset($_FILES['carimage']['name']);
    $car_image = isset($_FILES['carimage']['tmp_name']);
    $car_size  = isset($_FILES['carimage']['size']);
    $car_error = isset($_FILES['carimage']['error']);
    //if($car_error === 0){
        //if($car_size > 125000){
    $car_image_ex = pathinfo($car_name, PATHINFO_EXTENSION);
    $car_image_lc = strtolower($car_image_ex);
    $new_car_name = uniqid('IMG', true).".".$car_image_lc;

    //$allowed_exe = array("jpeg","jpg","png");
    $new_path = 'uploads/'.$new_car_name;
    move_uploaded_file($car_image, $new_path);


    $conn = mysqli_query($sql, "INSERT INTO `car` (`ID`,`carname`,`model`,`year`,`price`,`descr`,`img`) values('','$car_nam','$car_model','$car_year','$car_price','$car_description','$new_car_name')")or die(mysqli_error($sql));
    if(!$sql){
        echo "Error uploading data";
    }
    else{
        echo "Record uploaded successfully";
        exit;
    }
}

 exit;
   // echo "error.";
    //&& isset($_POST['name']) && isset($_POST['model']) && isset($_POST['brands']) && isset($_POST['year']) && isset($_POST['price']) && isset($_POST['description']) && isset($_FILES['carimage'])
?>























/*
session_start();
if(!$_SESSION['login']){
    header('location: admin.php');
}
else{

require('../connect.php');

if (isset($_POST['submit']) && isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['model']) && isset($_POST['brands']) && isset($_POST['year']) && isset($_POST['price']) && isset($_POST['description']) && isset($_FILES['image']))
 {
    $car_name = $_POST['name'];
    $car_model = $_POST['model'];
    $car_brand = $_POST['brands'];
    $car_year = $_POST['year'];
    $car_price = $_POST['price'];
    $car_description = $_POST['description'];


    $image_car = $_FILES['image'];
    print_r($image_car);
    $car_image = $_FILES['image']['tmp_name'];
    $car_name = $_FILES['image']['name'];


    $get_image_path = pathinfo($car_name, PATHINFO_EXTENSION);
    $filetype = strtolower($get_image_path);

    $image_new_name = uniqid('IMG', true).".".$filetype;
    $new_path = 'uploads/'.$image_new_name;
    move_uploaded_file($car_image, $new_path);
*/
   // $statement = mysqli_query($sql, "INSERT INTO `carproduct` (`car_name`,`car_model`,`car_brand`,`car_year`,`car_price`,`car_description`,`car_image`) VALUES('$car_name','$car_model','$car_brand','$car_year','$car_price','$car_description','$car_image')") or die(mysqli_error($sql));

    if ($statement) {
        echo "<h1 style=\"color:blue\">Car Added successfully!</h1>";
    } else {
        echo "Data not sent";
    }
     
} 
 

}
/*
 {
    $car_name = $_POST['name'];
    $car_model = $_POST['model'];
    $car_brand = $_POST['brands'];
    $car_year = $_POST['year'];
    $car_price = $_POST['price'];
    $car_description = $_POST['description'];

    $car_tmp = $_FILES['image']['tmp_name'];
    $car_name = $_FILES['image']['name'];


    $get_image_path = pathinfo($car_name, PATHINFO_EXTENSION);
    $filetype = strtolower($get_image_path);

    $image_new_name = uniqid('IMG', true).".".$filetype;
    $new_path = 'uploads/'.$image_new_name;
    move_uploaded_file($car_tmp, $new_path);

   // $statement = mysqli_query($sql, "INSERT INTO `carproduct` (`car_name`,`car_model`,`car_brand`,`car_year`,`car_price`,`car_description`,`car_image`) VALUES('$car_name','$car_model','$car_brand','$car_year','$car_price','$car_description','$car_image')") or die(mysqli_error($sql));

    if ($statement) {
        echo "<h1 style=\"color:blue\">Car Added successfully!</h1>";
    } else {
        echo "Data not sent";
    }
     
} 
 */

?>
