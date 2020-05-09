
<?php include("header.php"); ?>





  <!--/#main-slider-->


<section id="tutorlist"> 

<div class="container">
	<div class="row"> 
	<h2> Featured Tutors</h2>
	
	<?php 
	
	 $id=$_GET['id'];
	include("inc/constant.php");
	
	$sql = "SELECT *  FROM add_tutor WHERE id=$id";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
											// output data of each row
	while($row = $result->fetch_assoc()) {?>
	
	
		<div class="col-md-6"> 
		<div class="single-tutor">
		<div class="tutor-are">
				<div class="tutor-iteam"><h3><?php echo $row["name"] ?></h3></div>
				<div class="tutor-img"><h3><img src="images/img_avatar.png" alt="" /></h3></div>
		
		
		</div>
			
			<p><span>Qualification:</span> <?php echo $row["qualification"] ?></p>
			<p><span>Available at:</span> <?php echo $row["available_at"] ?></p>
			<p><span>Subejcts offered: </span><?php echo $row["subjects_taught"] ?></p>
			<div class="contact_info"> 
			<p><span>Contact Info:</span></p>
				<?php 
			
			if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if(($_SESSION['email']) && ($_SESSION['password']) ){?>
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