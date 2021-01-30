<?php

sleep(2);
$conn = mysqli_connect('localhost:3307', 'root', '','bus_reservation');

$fname = $_POST['fname'];
$email = $_POST['email'];
$mobiles = $_POST['mobiles'];
$message = $_POST['message'];

$sql = "insert into datas(name,email,mobile,message) values('$fname','$email','$mobiles','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

  
$conn->close();

?>