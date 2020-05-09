<?php


include("constant.php");


$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$area=$_POST['area'];
$number=$_POST['mobile'];
$honorary=$_POST['honorary'];
$qualification=$_POST['qualification'];
$class=$_POST['student_class'];



if(($name!=null) && ($honorary!=null) && ($number!=null) &&($qualification!=null) &&($subject!=null)) { 
$sql = "INSERT INTO tutor_request (name,mobile,email,class,subject,t_qualification,area,honorary)
VALUES ('$name','$number','$email','$class','$subject','$qualification','$area','$honorary')";



if ($conn->query($sql) === TRUE) {
    echo "Tutor Requested successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

else {

echo "You Have Missed Something";
}
?>








