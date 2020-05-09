<?php


include("constant.php");



$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['mobile'];
$qualification=$_POST['qualification'];
$subject=$_POST['subjects_taught'];
$area=$_POST['available_at'];



$sql = "INSERT INTO add_tutor (id,name,qualification,subjects_taught,available_at,img,mobile,email)
VALUES ('$id','$name','$qualification','$subject','$area','img2.jpg','$number','$email')";

if ($conn->query($sql) === TRUE) {
    echo "Tutor Added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>








