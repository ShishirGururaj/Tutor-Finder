
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
	$sql = "SELECT *  FROM teacher WHERE email='$email'";
	$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$name=$row["name"];
	$email=$row["email"];
	$number=$row["mobile"];
	$qualification=$row["qualification"];
	}
}

else {

echo "fff";}	
	
 ?>

<section id="contact-page">
    <div class="container">
       <div class="center">
        <h2>Teacher Panel</h2>
        </div>
      <div class="center"> <a class="btn btn-danger"href="inc/logout.php">logout</a>
        </div>
   
   
   
	
	<div class="col-md-1"></div>
				
				<div class="col-md-5 teacherinfo"> 
					<h3>Account Details </h3>
					
					
					

	
	
		

	<div class="single-tutor">
		<div class="tutor-are">
				<div class=""><h3><?php echo $name ?></h3></div>
				
		
		</div>
			
			<p><span>Qualification:</span> <?php echo $qualification ?></p>
			<p><span>Email:</span> <?php echo $email ?></p>
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
		
		var t_name=$("#name").val();
		var t_email=$("#email").val();
		var t_mob=$("#number").val();
		var t_area=$("#area").val();
		var sub=$("#subject").val();
		var t_degree=$("#qualification").val();
		

	
		
					$.ajax({
				
				
				url:'inc/addtutordata.php',
				data:{name:t_name,email:t_email,mobile:t_mob,qualification:t_degree,subject:sub,area:t_area},
				type:'POST',
				success:function(data){
					$("#result").html(data);
					
					
				}
				
				
				
			});
			
	
			
		
		
		
	
		});
		

		});
	
	
	
	
	
	
	
	
	
	</script> 



<?php include("footer.php"); ?>