<header class="app-layout-header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
                    <span class="sr-only">Toggle drawer</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-page-title">
                    <?php print($HT); ?>
                </span>
            </div>

            <div class="collapse navbar-collapse" id="header-navbar-collapse">



                <!-- .navbar-left -->

                <ul class="nav navbar-nav navbar-right navbar-toolbar ">




                    <li class="dropdown dropdown-profile">
                        <a href="javascript:void(0)" data-toggle="dropdown">
                            <span class="m-r-sm"><?php print_r($_SESSION['name_main_twh']); ?> <?php print_r($_SESSION['surname_main_twh']); ?> <span class="caret"></span></span>
                            <img class="img-avatar img-avatar-48" src="assets/img/avatars/ava.jpg" alt="User profile pic" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">
                                Welcome
                            </li>
                            <li>
                                <a href="profile">Profile</a>
                            </li>
                            
                            <li>
                                <a href="logout">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- .navbar-right -->
            </div>
        </div>
        <!-- .container-fluid -->
    </nav>
    <!-- .navbar-default -->
</header>