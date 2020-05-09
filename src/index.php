
<?php include("header.php"); ?>




  <section id="main-slider" class="no-margin">
    <div class="container">
      
                <div class="slogan">
                  <h2 ><span>TUTOR FINDER</span></h2>
                  <p>Find the best tutor near you</p>
                  
                </div>
              </div>
          

        
    <!--/.carousel-->
  </section>
  
  
  <section id="search-bar"> 
  
    <div class="container">
      
                
			   
			
		
		
		     <form class="search" method="POST" action="searchtutor.php">
				<h3>Search Tutor </h3>
                      <div class="form-group">
					   
						<label for="" style="color: #fff;">Class</label>
						<select class="form-control" name="class_student" id="class_student">

						  <option value="Class">Class</option>
						  <option value="Class 11">Class 11</option>
						  <option value="Class 12">Class 12</option>
						  
						  
						  
						</select>
						 <span class="error_message" id="class_error"></span>
			</div>
             
				
				  <div class="form-group">
						<label for="">Subject</label>
						<select class="form-control" name="subject" id="subject">
						 
						  <option value="Subject">Subject</option>
						  <option value="Physics">Physics</option>
						  <option value="CHemistry">Chemistry</option>
						  <option value="Mathematics">Mathematics</option>
						  <option value="Biology">Biology</option>
						  <option value="Kannada">Kannada</option>
						  <option value="English">English</option>
						  <option value="Hindi">Hindi</option>
						  
						  
						 
						  
						  
						  
						</select>
			</div>
			
			<input type="submit" value="search Tutor" class="searbtn" />
			
			   </form>
			   
              </div>
  
  </section>
  <!--/#main-slider-->


<section id="tutorlist"> 

<div class="container">
	<div class="row"> 
	<h2> Featured Tutors</h2>
	
	<?php 
	include("inc/constant.php");
	
	$sql = "SELECT *  FROM add_tutor";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
											// output data of each row
	while($row = $result->fetch_assoc()) {?>
	
	
		<div class="col-md-3"> 
		<div class="single-tutor">
		<div class="tutor-are">
				<div class="tutor-iteam"><h3><?php echo $row["name"] ?></h3></div>
				<div class="tutor-img"><h3><img src="images/img_avatar.png" alt="" /></h3></div>
		
		
		</div>
			
			<p><span>Qualification:</span> <?php echo $row["qualification"] ?></p>
			<p><span>Available at:</span> <?php echo $row["available_at"] ?></p>
			<p><span>Subjects offered: </span><?php echo $row["subjects_taught"] ?></p>
			<a href="detailstutor.php?id=<?php echo $row["id"] ?>">Details</a>
		</div>
		</div>
		
		<?php 	}
										} ?>
		
	
	</div>
</div>
	
</section>
 



  

  <section id="conatcat-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="pull-left">
              <i class="fa fa-phone"></i>
            </div>
            <div class="media-body">
              <h2>Have a question or need a custom quote?</h2>
              <p>Contact number - 9988776655</p>
              <p>email - tutorfinder@gmail.com
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#conatcat-info-->


<?php include("footer.php"); ?>