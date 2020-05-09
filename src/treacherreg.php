<?php


include("constant.php");



$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$qualification=$_POST['qualification'];
$password=$_POST['password'];



$user_type="teacher";

if(($name!=null) && ($email!=null) && ($mobile!=null) &&($qualification!=null) &&($password!=null)) { 
$sql = "INSERT INTO teacher (name,mobile,password,email,qualification)
VALUES ('$name','$mobile','$password','$email','$qualification')";

$query1="INSERT INTO user (email,password,usertype)
VALUES ('$email','$password','$user_type')";

if ($conn->query($sql) === TRUE && $conn->query($query1)) {
    echo "Tutor Added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

else {

echo "You Have Missed Something";
}
?>








