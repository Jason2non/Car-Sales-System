<?php
if(isset($_POST['submit'])){
    $image = $_FILES['file'];
    print_r($image);
}
?>