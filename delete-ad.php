<?php
    require 'includes/common.php';
    $product_id = $_GET['id'];
    $delete_query = "DELETE FROM products WHERE id ='$product_id' AND user_id='$_SESSION[id]'";
    $delete_query_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));
    header('location: my-ads.php');
    
    