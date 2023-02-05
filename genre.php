<?php 
    require 'includes/common.php';
    if(!isset($_SESSION["email_id"]))
    {
        header('location: index.php ');
    }
    include 'includes/links.php';
    
    ?>
        <title>CookDBook | My-ADs</title>
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
        <div class="box">
            <?php
            $genre = $_GET['genre'];
            $user_id = $_SESSION['id'];
            ?>
                <div class="container-fluid">
                <div class="head">
                    <h3 class="heading-1"><?php echo $genre ?> Books  </h3>
                    <div class="heading-underline"></div>
                </div>
                <?php
                
            $result = "SELECT id, book_name, price, genre, image FROM products WHERE NOT user_id='$user_id' AND  genre = '$genre'";
            $result_query = mysqli_query($con, $result) or die(mysqli_error($con));
            
            if(mysqli_num_rows($result_query) == 0){?>
                        <div class="empty-ads">
                            <h3>NO Ads !!<small> in this Genre.</small></h3>
                            
                        </div>
            <?php }
            else{ ?>
                <div class="row content">
                <?php while($data = mysqli_fetch_array($result_query)){?>
                
                <div class="col-md-3 card-1">
                        <div class="card ">
                            <img class="card-image-top" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>"  alt="Card image" height="400px" >
                            <div class="card-body">
                                <h5><?php echo $data['book_name']; ?></h5>
                                <p class="card-text">Price: <?php echo $data['price']; ?></p>
                                <p class="card-text">Genre: <?php echo $data['genre']; ?></p>
                                <a href="see-ad.php?id=<?php echo $data['id'] ?>" class="btn btn-block button-go"><stron>See Ad</stron></a>
                            </div>
                        </div>
                </div>    
                <?php }?>
                </div>
        <?php }?>
        </div> 
        </div>
       <?php
        include 'includes/footer.php';
        
      ?>
</body>
</html>