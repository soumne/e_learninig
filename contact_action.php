<?php
$con=mysqli_connect("localhost","root","","learning");
if(!$con){
    die("Connection Unsuccessful.".mysqli_connect_error());
}


$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="INSERT INTO contactus_table (name,email,mobile,subject,message) VALUES('".$name."','".$email."','".$mobile."','".$subject."','".$message."')";
$query=mysqli_query($con,$sql);
if($query){
    echo "<script>alert('Message Send Successful.');window.location.href='index.php';</script>";
}
else{
    echo "<script>alert('Sorry, Message Send Unsuccessful.');window.location.href='index.php';</script>";
}

?>