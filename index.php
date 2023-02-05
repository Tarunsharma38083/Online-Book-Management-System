<?php
    require 'includes/common.php';

    include 'includes/links.php';
    ?>


        <title>CookDBook | Home</title>
        <link rel="icon" href="img/title-logo.png">
        
    </head>
    <body>
        <?php 
           
            include 'includes/header.php';
        ?>
        
        <?php 
        include 'login-signup.php';
        ?>
        
        
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="carousel-img" src="img/coursel-img-1.jpg" alt="Los Angeles" >
                <div class="carousel-caption">
                    <h3>If you don’t like to read, you haven’t found the right book.</h3>
                  <p>– J.K. Rowling</p>
                </div>   
              </div>
              <div class="carousel-item">
                  <img class="carousel-img" src="img/coursel-img-2.jpg" alt="Chicago" >
                <div class="carousel-caption">
                  <h3>That’s the thing about books. They let you travel without moving your feet.</h3>
                  <p>– Jhumpa Lahiri</p>
                </div>   
              </div>
              <div class="carousel-item ">
                  
                  <img class="carousel-img" src="img/coursel-img-3.jpg" alt="New York" >
                      <div class="carousel-caption">
                        <h3>A book is a version of the world. If you do not like it, ignore it; or offer your own version in return.</h3>
                        <p>– Salman Rushdie</p>
                      </div>
                 
              </div>
              <div class="carousel-item">
                  <img class="carousel-img" src="img/coursel-img-4.jpg" alt="New York" >
                <div class="carousel-caption">
                  <h3>Rainy days should be spent at home with a cup of tea and a good book.</h3>
                  <p>– Bill Patterson</p>
                </div>   
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
      </div>
        <div class="box">
                <div class="container-fluid">
                <div class="head">
                    <h3 class="heading-1">FEATURED ADS</h3>
                    <div class="heading-underline"></div>
                </div>
                    
        <?php
        if(isset($_SESSION['id'])){
            $user_id = $_SESSION['id'];
            $result = "SELECT id, book_name, price, genre, image FROM products WHERE NOT user_id = '$user_id'";
            $result_query = mysqli_query($con, $result) or die(mysqli_error($con));
            
            if(mysqli_num_rows($result_query) == 0){?>
                        <div class="empty-ads">
                            <h3>NO Ads to show !!<small> in Website.</small></h3>
                            
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
        <?php }}
        else{
            $result = "SELECT id, book_name, price, genre, image FROM products";
            $result_query = mysqli_query($con, $result) or die(mysqli_error($con));
            
            if(mysqli_num_rows($result_query) == 0){?>
                        <div class="empty-ads">
                            <h3>NO Ads to show !!<small> in Website.</small></h3>
                            
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
                                <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-block button-go"><stron>See Ad</stron></a>
                            </div>
                        </div>
                </div>    
                <?php }?>
        <?php }
        }
?>
                </div>
                
            </div>
        </div>
        <?php
        
      
        
        include 'includes/footer.php';
        include 'includes/script.php';
      ?>
        
         
    </body>
    
</html>

