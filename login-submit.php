<?php 
    require 'includes/common.php';
    $email =mysqli_real_escape_string($con, $_POST['email']);
    $encrypt_pass = mysqli_real_escape_string($con, sha1($_POST['password']));

    $select_query="select id, email_id, username from users WHERE email_id='$email' AND password='$encrypt_pass'";
    $select_query_result=mysqli_query($con, $select_query) or die (mysqli_error($con));
    $total_rows_fetched=mysqli_num_rows($select_query_result);
    if( $total_rows_fetched == 0)
    {
        $_SESSION['Error'] = "Incorrect password or email";
      
        header('location: index.php');
    }
    else{
        $row = mysqli_fetch_array($select_query_result);

        $_SESSION['email_id'] = $email;

        $user_id = $row['id'];
        $_SESSION['id'] = $user_id ; 
         if(isset($_SESSION['email_id']))
        {

          header('location:index.php?id = $_SESSION["email_id"]');
        }
        }
?>

