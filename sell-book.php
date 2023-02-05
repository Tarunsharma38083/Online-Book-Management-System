
<?php
    require 'includes/common.php';
    if(!isset($_SESSION["email_id"]))
    {
        header('location: index.php ');
    }
    include 'includes/links.php';
    ?>


        <title>CookDBook | Sell</title>
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
        <div class="container" >
            <div class="head">
            <h3 class="heading-1">Post Your AD</h3>
            <div class="heading-underline"></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="sell_submit.php" method="POST" enctype="multipart/form-data" class="needs-validation col-md-8 offset-md-2" novalidate>
                        <div class="form-group">
                            
                            
                          <label for="bname">Book's name:</label>
                          <input type="text" class="form-control" id="uname" placeholder="Name" name="bname" required>
                          
                          <div class="invalid-feedback">Please fill out this field.</div>
                          
                        </div>
                        <div class="form-group">
                           <label for="genre">Select Genre:</label> 
                           <select id="genre" name="genre" class="custom-select">
                            
                            <option value="Action and Adventure">Action and Adventure</option>
                            <option value="Poetry">Poetry</option>
                            <option value="Graphic Novel">Graphic Novel</option>
                            <option value="Thrillers">Thrillers</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Horror">Horror</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Romance">Romance</option>
                            <option value="Self-Help">Self-Help</option>
                            <option value="Biographies">Biographies</option>
                            <option value="History">Educational</option>
                            <option value="Other">Other</option>
                        </select>
                        
                        </div>
                        <div class="form-group">
                          <label for="price">Select price:</label>
                          <input type="number" class="form-control" id="price" placeholder="Price" name="price" required>
                          
                          <div class="invalid-feedback">Please fill out this field.</div>
                          
                        </div>
                        <div class="form-group">
                          <label for="description">Description:</label>
                          <textarea class="form-control" rows="5" id="description" name= "description" placeholder="Description" required></textarea>
                          
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <img id="img" src="img/upload-img.jpg" alt="your image" width="200px" height="200px" style="border: 1px solid;"/><br>
                            <label for="image">Add an image:</label>
                            
                            <div id="image" class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" required onchange="readURL(this);" name="image" 
                                      value=""  />
                                   <label class="custom-file-label" for="customFile">Choose file</label>
                                   <div class="invalid-feedback">Please fill out this field.</div>
                                 </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary search-button form-button" name='upload'>Submit</button>
                    </form>
                    </div>

                </div>
            </div>
        </div>
        </div>
        <?php
        include 'includes/footer.php';
        
      ?>
        <script>
        (function() { //validation form
          'use strict';
          window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        $(".custom-file-input").on("change", function() { //coose photo show
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
          });
          function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
        </script>
    </body>
</html>