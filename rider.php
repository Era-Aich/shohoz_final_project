

<?php

$name =$_POST['name'];
$email = $_POST['email'];

$phone = $_POST['phone'];

$username=$_POST['username'];
$destination=$_POST['destination'];


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection failed : ".$conn->connect_error);

}

else{
    $stmt = $conn->prepare("insert into rider(name,email,phone,username,destination) values(?,?,?,?,?)");
    $stmt->bind_param("ssiss",$name,$email,$phone,$username,$destination);
    $execval= $stmt->execute();
    echo $execval;
    echo "Booking complete";
    $stmt->close();
    $conn->close();
}






?>