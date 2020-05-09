<?php include("header.php"); ?>
<?php
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if(($_SESSION['email']) && ($_SESSION['password']) && ($_SESSION['user_type']=="guardian") ){
   header("Location: http://localhost/bdtutor/gurdianadmin.php");
  }
  
  if(($_SESSION['email']) && ($_SESSION['password']) && ($_SESSION['user_type']=="teacher") ){
   header("Location: http://localhost/bdtutor/teacheradmin.php");
  }
  if(($_SESSION['email']) && ($_SESSION['password']) && ($_SESSION['user_type']=="admin")){
    header("Location:http://localhost/bdtutor/admin.php");
  }
  
  ?>
  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Login</h2>
        
      </div>
      <div class="row contact-wrap">
        
        <div class="col-md-6 col-md-offset-3">
         
          <form action="inc/loginprocess.php" method="post" role="form" class="contactForm" autocomplete="off">
            <div class="form-group">
              <input type="text" name="email" class="form-control" id="name" placeholder=" Your Email or Username " required="required"  />
            
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" id="" placeholder="Your Password" required="required"  />
            
            </div>
            
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Login</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

<?php include("footer.php"); ?>
