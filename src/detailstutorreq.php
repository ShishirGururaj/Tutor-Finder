
<?php include("header.php"); ?>





  <!--/#main-slider-->


<section id="tutorlist"> 

<div class="container">
	<div class="row"> 
	<h2> Featured Tutors</h2>
	
	<?php 
	
	 $id=$_GET['id'];
	include("inc/constant.php");
	
	$sql = "SELECT *  FROM tutor_request WHERE id=$id";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
											// output data of each row
	while($row = $result->fetch_assoc()) {?>
	
	
		<div class="col-md-6"> 
		<div class="single-tutor">
		
			<p><span>Requested Subject: </span><?php echo $row["subject"] ?></p>
			<p><span>Preferred Qualification:</span> <?php echo $row["t_qualification"] ?></p>
			<p><span>Requested Area:</span> <?php echo $row["area"] ?></p>
			<p><span>For:</span> <?php echo $row["class"] ?></p>
			<p><span>Quoted Price:</span> <?php echo $row["honorary"] ?></p>
			<div class="contact_info"> 
			<h3>Contact Info</h3>
				<?php 
			
			if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if(($_SESSION['email']) && ($_SESSION['password']) ){?>
			<p><span>Name: </span><?php echo $row["name"] ?></p>
			<p><span>Email: </span><?php echo $row["email"] ?></p>
			<p><span>Contact Number: </span><?php echo $row["mobile"] ?></p> 
			<?php 
			} else 
			echo '<a href="login.php">Login for further Details</a>';
			?>
			
			</div>
			
		</div>
		</div>
		
		<?php 	}
										} ?>
		
	
	</div>
</div>
	
</section>
 



  


  <!--/#conatcat-info-->


<?php include("footer.php"); ?>