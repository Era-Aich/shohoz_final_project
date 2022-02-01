<?php

$name =$_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection failed : ".$conn->connect_error);

}

else{
    $stmt = $conn->prepare("insert into registration(name,email,password,phone) values(?,?,?,?)");
    $stmt->bind_param("sssi",$name,$email,$password,$phone);
    $execval= $stmt->execute();
    echo $execval;
    echo "registration complete";
    $stmt->close();
    $conn->close();
}






?>