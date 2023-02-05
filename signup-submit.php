<?php
    require "includes\common.php";
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $Pass = mysqli_real_escape_string($con, sha1($_POST['password']));
    $email_id =  mysqli_real_escape_string($con, $_POST['email_id']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $if_exist = "SELECT id FROM users WHERE email_id = '$email_id'";
    $if_exist_query = mysqli_query($con, $if_exist) or die(mysqli_error($con));
    if(mysqli_num_rows($if_exist_query)>0)
    {
        $_SESSION['Error'] = "Existing user";
        header('location: index.php');
    }
    else {
        $insert_user = "INSERT INTO users(email_id, password, contact, username) VALUES ('$email_id', '$Pass', '$contact', '$name')";
        $insert_user_query = mysqli_query($con, $insert_user) or die(mysqli_error($con));
        $_SESSION['id'] = mysqli_insert_id($con);
        $_SESSION['email_id'] = $email_id;
        header('location: index.php?id=$_SESSION["email_id"]');
    }
?>