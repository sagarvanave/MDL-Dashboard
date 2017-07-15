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
        .menu2 {
            background-color: #00BCD4;
        }
        
        .menuname2 {
            color: #37474F;
        }

    </style>
</head>

<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Form</span>
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
                                <h4>Reg. Form</h4>
                            </div>
                            <div class="forminnerdiv">
                                <form>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="sample3">
                                        <label class="mdl-textfield__label" for="sample3">Text...</label>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
                                        <label class="mdl-textfield__label" for="sample4">Number...</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" type="text" rows="3" id="sample5"></textarea>
                                        <label class="mdl-textfield__label" for="sample5">Text lines...</label>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <!--                                    <textarea class="mdl-textfield__input" type="text" rows="3" id="sample6"></textarea>-->
                                        <select class="mdl-textfield__input" id="sample6"> 
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                        <label class="mdl-textfield__label" for="sample6">Select Item</label>
                                    </div>

                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                                      <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>
                                      <span class="mdl-checkbox__label">Checkbox</span>
                                </label>
                                    <br><br>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
  <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
  <span class="mdl-radio__label">First</span>
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
  <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="1">
  <span class="mdl-radio__label">Second</span>
</label>
                                    <br><br>
                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
  <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
  <span class="mdl-switch__label"></span>
</label>
                                    <br><br>
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  Submit
</button>
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
