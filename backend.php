<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$number=$_POST['number'];
$email=$_POST['email'];
$conn = new mysqli('root@localhost','root','','bbit');

if($conn->connect_error){
die('Connection Failed :' .$conn->connect_error);
}
else{
    $stmt= $conn->prepare("insert into registration(fname,lname,age,number,email) values(?,?,?,?,?)");
    $stmt->bind_param("ssiis",$fname,$lname,$age,$number,$email);
    $stmt->execute();
    echo"registration successfull....";
    $stmt->close();
    $conn->close();
}
