<?php
$con=mysqli_connect("localhost","root","","learning");
if(!$con){
    die("Connection Unsuccessful.".mysqli_connect_error());
}


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['upass'];
$repass=$_POST['urepass'];

$sql="INSERT INTO reg(name,email,password,repass) VALUES('".$name."','".$email."','".$password."','".$repass."')";
$query=mysqli_query($con,$sql);
if($query){
    echo "<script>alert('Registration Successful.');window.location.href='log.php';</script>";
}
else{
    echo "<script>alert('Sorry, Registration Unsuccessful.');window.location.href='registration.php';</script>";
}

?>