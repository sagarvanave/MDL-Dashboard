<?php session_start();?>
<?php error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");   
}
else
{
    //header("location:index.php");   
}
   
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Loading...</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fonts/icons.css">
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="css/my.css">
     <script src="js/main.js"></script>
    <script>
    setInterval(function(){ window.location.href="index.php"; }, 3000);
    </script>
</head>
<body>
<!-- MDL Progress Bar with Indeterminate Progress -->
   <br><br><br><br>
   <br><br><br><br>
   <br><br><br><br>
   <br><br><br><br>
    <center><div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div></center>
</body>
</html>
