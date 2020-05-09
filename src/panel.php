<?php 
					 if(!isset($_SESSION)) 
    { 
        session_start(); 
		
    }
	  if(isset($_SESSION['user_type'])  ){

if($_SESSION['user_type']=="admin") {
 header("Location: http://localhost/bdtutor/admin.php");
}	  
 if ($_SESSION['user_type']=="guardian") {
   header("Location: http://localhost/bdtutor/gurdianadmin.php");
 } 
 
 if ($_SESSION['user_type']=="teacher") {
   header("Location: http://localhost/bdtutor/teacheradmin.php");
 }	
 if ($_SESSION['user_type']=="student") {
   header("Location: http://localhost/bdtutor/studentadmin.php");
 }	


	  
	  }
	  
	  else {
	   header("Location: http://localhost/bdtutor/");
	  }
  ?>