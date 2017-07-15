<?php session_start();?>
<?php error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");   
}
   
?>
<!doctype html>

<html ng-app="myapp" ng-controller="myctrl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Table</title>

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
    <script src="js/angular.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fonts/icons.css">
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="css/my.css">
    <style>
        .menu3 {
            background-color: #00BCD4;
        }
        
        .menuname3 {
            color: #37474F;
        }

    </style>
</head>

<body>
    <div>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
             <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Table</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search" ng-model="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
        
        </div>
      </header>
            <?php 
        include "nav.php";
        ?>

            <main class="mdl-layout__content mdl-color--grey-100">
                <br>
                <br>
                <br>
                <div class="mdl-grid">
                    
                    <div class="mdl-cell mdl-cell--1-col">
                
                   </div>
                    <div class="mdl-cell mdl-cell--10-col" style="overflow-x:auto; height:auto;max-height:500px;overflow:auto;width:auto;">
                      
                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="tableData">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th class="mdl-data-table__cell--non-numeric">Name</th>
                                    <th>Mobile</th>
                                    <th class="mdl-data-table__cell--non-numeric">Email</th>
                                    <th class="mdl-data-table__cell--non-numeric">City</th>
                                    <th class="mdl-data-table__cell--non-numeric">Join Date</th>
                                    <th class="mdl-data-table__cell--non-numeric">Availability</th>
                                    <th class="mdl-data-table__cell--non-numeric">Availability</th>
                                    <th class="mdl-data-table__cell--non-numeric">Availability</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr ng-repeat="x in con  | filter:search">
                                    <td>{{x.srno}}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{x.name}}</td>
                                    <td>{{x.mobile}}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{x.email}}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{x.city}}</td>
                                    <td>{{x.joindate}}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{x.availability}}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{x.availability}}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{x.availability}}</td>
                                    
                                </tr>
                            </tbody>
                        </table>

                    </div>


                    <script>
                        var x = angular.module("myapp", []);
                        x.controller("myctrl", function($scope, $http, $interval) {

                            $interval(function(){
                            $http({
                                method: "GET",
                                url: "jsondata.php"

                            }).then(function success(response) {

                                $scope.con = response.data.records;

                            }, function error(response) {
                                $scope.con = response.statusText;

                                          },5000);
                            });
                        });

                    </script>
                    <!--
                    
                    ****For Pagenation******
                    
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script type="text/javascript" src="js/paging.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#tableData').paging({
                                limit: 10
                            });
                        });

                    </script>-->
                    <div class="mdl-cell mdl-cell--1-col"></div>
                </div>
            </main>
        </div>
    </div>

    <script src="js/main.js"></script>

</body>

</html>
