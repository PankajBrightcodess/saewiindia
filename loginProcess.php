<?php
session_start();
include 'database.php';
if(isset($_POST['save']))
{
    // extract($_POST);
    $username = $_POST['username'];
	 $pass = $_POST['pass'];
    include 'database.php';
    $sql="SELECT * FROM sa_users where  pass='$pass' and  username='$username'";
    $res=mysqli_query($conn,$sql);
   $row  = mysqli_num_rows($res); 
    if($row==1)
    {
        $r = mysqli_fetch_assoc($res); 
        $_SESSION["email"]=$r['email'];
        header("Location: home.php"); 
    } else
    {
       header('Location:login.php');
    }
}
?>