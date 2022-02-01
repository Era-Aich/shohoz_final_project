<?php

$name =$_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$ridername = $_POST['ridername'];
$text= $_POST['text'];


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection failed : ".$conn->connect_error);

}

else{
    $stmt = $conn->prepare("insert into complain(name,email,phone,ridername,text) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$name,$email,$phone,$ridername,$text);
    $execval= $stmt->execute();
    echo $execval;
    echo "registration complete";
    $stmt->close();
    $conn->close();
}






?>