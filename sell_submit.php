<?php
    require 'includes/common.php';
    $status = $StatusMsg = '';
    
    $book_name = mysqli_real_escape_string($con, $_POST['bname']);
    $book_price = mysqli_real_escape_string($con, $_POST['price']);
    $book_genre = mysqli_real_escape_string($con, $_POST['genre']);
    $book_des = mysqli_real_escape_string($con, $_POST['description']);
    $fileName = basename($_FILES["image"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $user_id = $_SESSION['id'];
    $allowTypes = array('jpg','png','jpeg','gif');
    if(!empty($_FILES["image"]["name"])){
        if(in_array($fileType, $allowTypes)){
            $tempname = $_FILES["image"]["tmp_name"];
            $imgContent = addslashes(file_get_contents($tempname));
            $insert_product = "INSERT INTO products (book_name, genre, price, description, image, user_id ) VALUES "
                . "('$book_name', '$book_genre', '$book_price', '$book_des', '$imgContent', '$user_id' )";
            $insert_product_query = mysqli_query($con, $insert_product) or die(mysqli_error($con));
            if($insert_product_query){ 
                    $status = 'success'; 

                    $StatusMsg = 'Book added sucessfully';
                     header('location: my-ads.php? $_SESSION["msg"] = $StatusMsg');
                }else{ 

                   $StatusMsg = 'Book upload fail!!';
                   echo $StatusMsg;
                   // header('location: sell-book.php? $_SESSION["msg"] = $StatusMsg');
                }  
        }else{
            $StatusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            echo $StatusMsg;
            //header('location: sell-book.php?$_SESSION["msg"] = $StatusMsg');
        }
    }
    else {
        $StatusMsg = 'please select an image';
        echo $StatusMsg;
        //header('location: sell-book.php?$_SESSION["msg"] = $StatusMsg');
    }
    
            
    

        
        
       
        
        