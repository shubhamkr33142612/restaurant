<?php
$connection = mysqli_connect('localhost','root','','restaurant');



mysqli_select_db($connection, 'restaurant');

$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$query = "insert into shubham (user, email, pass )
values ('$user' ,'$email' ,'$pass')";
echo($query);

mysqli_query($connection , $query);

header('location:index.php');
 

?>