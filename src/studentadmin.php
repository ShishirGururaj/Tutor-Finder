
<?php include("header.php"); ?>
<?php
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if((!$_SESSION['email']) && (!$_SESSION['password']) ){
   header("Location: http://localhost/bdtutor/");
  }
  
 					
	include("inc/constant.php");
	$email=$_SESSION['email'];
	$sql = "SELECT *  FROM student WHERE username='$email'";
	$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
	$name=$row["name"];
	$institute_name=$row["institute_name"];
	$number=$row["mobile"];
	$class=$row["class"];
	}
}

else {

echo "fff";}	
	
 ?>

<section id="contact-page">
    <div class="container">
       <div class="center">
        <h2>Student Panel</h2>
        </div>
      <div class="center"> <a class="btn btn-danger"href="inc/logout.php">logout</a>
        </div>
   
   
   <div class="row"> 
   
				<div class="col-md-6"> 
		<h3> Request Tutor </h3>
          
          
          <div class="contactForm">
		
			<div class="form-group">
              <input  class="form-control" type="text"   name="location" id="location" placeholder="Your Location" required="required" />
             <span class="error_message" id="mobile_error"></span>
            </div>
           
              <input type="hidden" name="name" class="form-control" id="name" value="<?php echo $name ?>"  />
              <input type="hidden" name="class" class="form-control" id="class" value="<?php echo $class ?>"  />
              
        
           
              <input type="hidden" class="form-control" name="mobile" id="number" value="<?php echo $number ?>" />
             
       
        
			
           
         
			  <div class="form-group">
						<label for="">Subject</label>
						<select class="form-control" name="subject" id="subject">
						  <option>Subject</option>
						  
						  <option value="Physics">Physics</option>
						  <option value="Chemistry">Chemistry</option>
						  <option value="Mathematics">Mathematics</option>
						  <option value="Cmputer Science">Computer Science</option>
						  <option value="Biology">Biology</option>
						  <option value="Kannada">Kannada</option>
						  <option value="English">English</option>
						  <option value="Hndi">Hindi</option>
						  
						  
						 
						  
						  
						  
						</select>
			</div>
			
			   <div class="form-group">
						<label for="">Qualification</label>
						<select class="form-control" name="qualification" id="qualification">
						  <option>Qualification</option>
						  
						  <option value="B.Sc">B.Sc</option>
						  <option value="B.A">B.A</option>
						  
						  
						  <option value="M.Sc">M.Sc</option>
						  <option value="M.A">M.A</option>
						  <
						  
						</select>
			</div>
			
			    <div class="form-group">
						<label for="">Honorary</label>
						<select class="form-control" name="honorary" id="honorary">
						  <option>Price Range</option>
						  
						  <option value="Below Rs.300/hr">Below Rs.300/hr</option>
						  <option value="Rs.300-500/hr">Rs.300-500/hr</option>
						  <option value="Rs.500-750/hr">Rs.500-750/hr</option>
						  <option value="Above Rs.750/hr">Above Rs.750/hr</option>
						  
						  
						 
						  
						  
						  
						</select>
			</div>
			
			
            <div class="text-center"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" >Submit </button></div>
          </div>
		  <div id="result"></div>
			</div>
	
	<div class="col-md-1"></div>
				
				<div class="col-md-5 teacherinfo"> 
					<h3>Account Details </h3>
					
					
					

	
	
		

	<div class="single-tutor">
		<div class="tutor-are">
				<div class=""><h3><?php echo $name ?></h3></div>
				
		
		</div>
			
			<p><span>Institute Name:</span> <?php echo $institute_name ?></p>
			<p><span>Class:</span> <?php echo $class ?></p>
			<p><span>Number:</span> <?php echo $number ?></p>
			
		</div>
	

				
				</div>
   
   
   </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
 
<script src="js/jquery-2.js"></script>
<script type="text/javascript"> 
	
		$(document).ready(function(){
		
		$("#submit").click(function(){
		
		var name=$("#name").val();
		var mob=$("#number").val();
		var email="N/A";
		var student_class=$("#class").val();
		var area=$("#location").val();
		var sub=$("#subject").val();
		var degree=$("#qualification").val();
		var honory=$("#honorary").val();
		

	
		
					$.ajax({
				
				
				url:'inc/tutor_req.php',
				data:{student_class:student_class,name:name,subject:sub,email:email,area:area,mobile:mob,honorary:honory,qualification:degree},
				type:'POST',
				success:function(data){
					$("#result").html(data);
					
					
				}
				
				
				
			});
			
	
			
		
		
		
	
		});
		

		});
	
	
	
	
	
	
	
	</script> 



<?php include("footer.php"); ?>