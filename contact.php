<?php

$conn = new mysqli("localhost","root","","bhavani graphics");

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact(name,email,message)
VALUES('$name','$email','$message')";

if($conn->query($sql)){
    echo "Message Sent Successfully";
}else{
    echo "Error: ".$conn->error;
}

$conn->close();

?>