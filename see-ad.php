<?php
    require 'includes/common.php';

    include 'includes/links.php';
    ?>
    
        <title>CookDBook | BUY</title>
        <link rel="icon" href="img/title-logo.png">
        <style>
            .navigation-t{
                background: #4d4d4d;
            }
            #back-to-top{
                display: none;
            }
        </style>
    </head>
    <body>
        <?php 
            include 'includes/header.php';
        ?>
        <?php
        $product_id = $_GET['id'];
         
        $result = "SELECT * FROM products WHERE id='$product_id'";
        $result_query = mysqli_query($con, $result) or die(mysqli_error($con));
        $data = mysqli_fetch_array($result_query);
        $user_id = $data['user_id'];
        $result_1 = "SELECT contact, email_id FROM users WHERE id='$user_id'";
        $result_1_query = mysqli_query($con, $result_1) or die(mysqli_error($con));
        $data_1 = mysqli_fetch_array($result_1_query);
        ?>
        <div class="box">
            <div class="container">
                <div class="row ad-box">
                    <div class="col-md card-1">
                        <div class="card">
                            <img  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>"  alt="Card image" height="500px" >
                        </div> 
                    </div>
                    <div class="col-md card-1">
                        <div class="card" style="height: 500px; margin: auto;">
                            <div class="ad-content">
                                <div class="head">
                                    <h3 class="book-name"><?php echo $data['book_name']; ?></h3>
                                    <div class="heading-underline"></div>
                                </div>
                            <P><strong>PRICE: </strong><?php echo $data['price']; ?></P>
                            <P><strong>GENRE: </strong><?php echo $data['genre']; ?></P>
                            <P><strong>DESCRIPTION: </strong><?php echo $data['description']; $data_1['contact'] ?></P>
                            
                            </div>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;">
                                <a href="tel:<?php echo $data_1['contact'] ?>"class="btn col-md  button-go"><i class="fa fa-phone icon"></i><stron> CALL</stron></a>
                                <a href="https://wa.me/91<?php echo $data_1['contact'] ?>" class="btn col-md button-go"><i class="fa fa-comments-o  icon" ></i><stron> CHAT</stron></a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    <?php
        
        include 'includes/footer.php';
        
      ?>
        
         
    </body>
    
</html>
