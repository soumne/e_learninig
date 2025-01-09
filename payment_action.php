<?php

include("db1_connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST)){
    $uid=$_POST['uid'];
    $method=$_POST['method'];

    global $conn;
    $sql="INSERT INTO payment(s_id,method) VALUES ('".$uid."','".$method."')";
    $query=mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('Payment Successfull.');
        window.location.href='stu_details.php';
        </script>";
    }else{
        echo "<script>
        alert('Payment Not Successfull.');
        window.location.href='payment.php';
        </script>";
    }
}

?>