<?php session_start();?>
<?php error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");   
}
   
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Form</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fonts/icons.css">
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="css/my.css">
    <style>
        .menu4 {
            background-color: #00BCD4;
        }
        
        .menuname4 {
            color: #37474F;
        }

    </style>
    <script>
        function checkpass() {
            var pass = document.getElementById("sample3").value;
            var repass = document.getElementById("sample4").value;
            var count = pass.localeCompare(repass);
           
            if (count != 0) {
               document.getElementById("pass").innerHTML="*Enter Same Password";
                return false;
            } else {
                document.getElementById("pass").innerHTML="";

            }
        }

    </script>
</head>

<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Account Setting</span>
            </div>
        </header>
        <?php 
        include "nav.php";
        ?>

        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-grid demo-content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--1-col"></div>
                    <div class="mdl-cell mdl-cell--10-col">

                        <div class="formdiv">
                            <div class="heading">
                                <h4>Change Password</h4>
                            </div>
                            <div class="forminnerdiv">
                                <form>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="password" id="sample2">
                                        <label class="mdl-textfield__label" for="sample2">Previous Password</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="password" id="sample3">
                                        <label class="mdl-textfield__label" for="sample3">New Password</label>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="password" id="sample4" onkeyup="return checkpass()">
                                        <label class="mdl-textfield__label" for="sample4">Re-Enter New Password</label>
                                       
                                    </div><br>
                                     <i id="pass" style="color:red;"></i>
                                    <br><br>
                                    <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Change Password" onclick="return checkpass()">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--1-col"></div>

                </div>

            </div>
        </main>
    </div>


    <script src="js/main.js"></script>
</body>

</html>
