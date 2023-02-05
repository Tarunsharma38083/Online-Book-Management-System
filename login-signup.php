
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          

                
                      <div class="card">
                          <div class="login-box">
                              <div class="login-snip">
                               <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                               <label for="tab-1" class="tab">Login</label>
                                <input id="tab-2" type="radio" name="tab" class="sign-up">
                               <label for="tab-2" class="tab">Sign Up</label>
                                  <div class="login-space">
                                      
                                      <div class="login">
                                          <form method="POST" action="login-submit.php">
                                              <?php 
                                                if(isset($_SESSION['Error'])){
                                                    echo "<div style='color:red;'><script>alert('" .$_SESSION['Error'] ."')</script></div>";
                                                    unset($_SESSION['Error']);
                                                }
                                                ?>
                                              <div class="group"> <label for="user" class="label">email</label> <input id="user" name="email" type="email" class="input" placeholder="Enter Email"> </div>
                                              <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Ente password"> </div>
                                          <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                                          <div class="group"> <input type="submit" class="button" value="Login"> </div>
                                          <div class="hr"></div>
                                          </form>


                                      </div>
                                      <div class="sign-up-form">
                                          <form method="POST" action="signup-submit.php">
                                             <?php 
                                                if(isset($_SESSION['Error'])){
                                                    echo "<div style='color:red;'><script>alert('" .$_SESSION['Error'] ."')</script></div>";
                                                    unset($_SESSION['Error']);
                                                }
                                                ?> 
                                              <div class="group"> <label for="user" class="label">Username</label> <input name="name" id="unique" type="text" class="input" placeholder="Enter Username"> </div>
                                              <div class="group"> <label for="pass" class="label">Password</label> <input name="password"id="unique1" type="password" class="input"   placeholder="Enter password"> </div>
                                          <div class="showpass"><input type="checkbox"   onclick ="showpass()" >Show Password</div>
                                          <div class="group"> <label for="pass" class="label">Phone</label> <input id="unique3" name="contact" type="number" class="input" placeholder="Phone No."> </div>
                                          <div class="group"> <label for="pass" class="label">Email Address</label> <input id="unique3" name="email_id" type="text" class="input" placeholder="Enter email"> </div>
                                          <div class="group"> <input type="submit" class="button" value="Sign Up"> </div>
                                          <div class="hr"></div>
                                          <div class="foot"> <label for="tab-1">Already Have An Account?</label> </div>
                                          </form>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  
<!--         Modal Header 
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
         Modal body 
        <div class="modal-body">
          Modal body..
        </div>
        
         Modal footer 
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>-->
        
      </div>
    </div>
  </div>