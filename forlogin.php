<?php session_start();?>
<?php
if(isset($_REQUEST['login']))
{
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    if($username=="admin" && $password=="123123")
    {
        $_SESSION['username']=$username;
        header("location:loading.php");   
    }
    else
    {
        header("location:login.php");   
    }
}
else
{
    header("location:login.php");   
}
?>