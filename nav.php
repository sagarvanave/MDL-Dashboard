<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>
            <?php
                            date_default_timezone_get('Asia/kolkata');
                            $time = date("H");
                            if ($time>"4" && $time < "12") {
                                echo "Good Morning, Admin";
                            } else
                            if ($time >= "12" && $time < "17") {
                                echo "Good Afternoon, Admin";
                            } else
                            if ($time >= "17" && $time <= "21") {
                                echo "Good Evening, Admin";
                            } else
                            if ($time >= "21" && $time<="4") {
                                echo "Good Night, Admin";
                            }
            ?>
            </span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                <a class="mdl-navigation__link" href="accountsetting.php"><li class="mdl-menu__item"><i class="material-icons">settings</i>&nbsp;&nbsp; Account Settings</li></a>
                <a class="mdl-navigation__link" href="logout.php"><li class="mdl-menu__item"><i class="material-icons">input</i>&nbsp;&nbsp; Logout</li></a>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
            <a class="mdl-navigation__link menu1" href="index.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i><b class="menuname1">Home</b></a>
            
             <a class="mdl-navigation__link menu2" href="form.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">mood</i><b class="menuname2">Form</b></a>
             
              <a class="mdl-navigation__link menu3" href="table.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">mood</i><b class="menuname3">Table</b></a>
          
          <div class="mdl-layout-spacer"></div>
            <a class="mdl-navigation__link menu4" href="accountsetting.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i><b class="menuname4">Settings</b></a>
            <a class="mdl-navigation__link menu5" href="logout.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">input</i><b class="menuname5">Logout</b></a>
        </nav>
      </div>