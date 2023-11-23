<?php

$connection = mysqli_connect('localhost:3307','root'," ","iwt");

mysqli_select_db($connection,"iwt");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `user_iwt`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>