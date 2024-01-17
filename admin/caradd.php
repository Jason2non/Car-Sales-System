<?php
require('../connect.php');


if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['model']) && isset($_POST['year']) && isset($_POST['price']) && isset($_POST['description']) && isset($_FILES['carimage']))
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
    $car_name  = $_FILES['carimage']['name'];
    $car_image = $_FILES['carimage']['tmp_name'];
    //$car_size  = isset($_FILES['carimage']['size']);
    //$car_error = isset($_FILES['carimage']['error']);
    //if($car_error === 0){
        //if($car_size > 125000){
    $car_image_ex = pathinfo($car_name, PATHINFO_EXTENSION);
    $car_image_lc = strtolower($car_image_ex);
    $new_car_name = uniqid('IMG', true).".".$car_image_lc;

    //$allowed_exe = array("jpeg","jpg","png");
    $new_path = 'uploads/'.$car_name;
    move_uploaded_file($car_image, $new_path);


    $conn = mysqli_query($sql, "INSERT INTO `car` (`ID`,`carname`,`model`,`year`,`price`,`descr`,`img`) values(' ','$car_nam','$car_model','$car_year','$car_price','$car_description','$car_name')")or die(mysqli_error($sql));
    if(!$conn){
        echo "Error uploading data";
    }
    else{
        echo "<script>alert(\"Record uploaded successfully\")</script>";
        echo "<script>window.location=\"addCar.php\"</script>";
        exit();

    }
}
?>




















