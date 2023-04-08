<?php

require_once 'session.php';


$connection = mysqli_connect('localhost','root','','restaurant');



mysqli_select_db($connection, 'restaurant');

if(isset($_POST['register'])) {

$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$hash_password =password_hash($pass, PASSWORD_DEFAULT);


$query = "insert into logdata (user, email, pass ,to_date)
values ('$user' ,'$email' ,'$hash_password',now())";
// echo($query);

$result=mysqli_query($connection , $query);

if($result==TRUE){

header('location:index.php');
}
else{
    echo "Error";
}
 
}
?>