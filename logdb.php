<?php
$login='false';
$showError ='false';
$con = mysqli_connect('localhost','root','','restaurant');
mysqli_select_db($con, 'restaurant');

if($con) {  
    echo "sucess";
}  

else{
    die("Error".mysqli_connect_error());
}

if(isset($_POST['login'])) {
   
    
    $user =$_POST['user'];
    $pass =$_POST['pass'];

    
    // $sql= "SELECT * FROM logdata WHERE user='". $_POST["user"] . "' AND pass='" . $_POST["pass"] . "'    ";

    $sql = "SELECT * FROM logdata where user ='$user' AND pass ='$pass'";
    $result = mysqli_query($con , $sql);
    

    $num = mysqli_num_rows($result);
    // while($result = mysqli_fetch_array($sql)){
    //     echo $result['user'];
    //     $login = true;
    //     echo "login";
    //     header('location:index.php');
        
    //  }
    // $num  = $result->num_rows;
    echo `$num`;

    if ($num == 1) {
        $login = true;
        echo "login";
        header('location:index.php');
    }
    else{
        $showError = "Invalid Credentials";
    }
}


   
?>