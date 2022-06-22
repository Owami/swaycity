<aside class="app-layout-drawer">

    <!-- Drawer scroll area -->
    <div class="app-layout-drawer-scroll">
        <!-- Drawer logo -->
        <div id="logo" class="drawer-header">
            <a href="index"><img class="img-responsive" src="assets/img/logo/main.png" title="AppUI" alt="AppUI" /></a>
        </div>

        <!-- Drawer navigation -->
        <nav class="drawer-main">
            <ul class="nav nav-drawer">
                <?php 
                    switch ($_SESSION['u_level_main_twh']) {
                        case 1:
                            include('includes/main/nav1.php');
                            break;
                        case 5:
                            include('includes/main/nav2.php');
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                ?>

               


            </ul>
        </nav>
        <!-- End drawer navigation -->

        <div class="drawer-footer">
            <p class="copyright">Operandi Tech &copy;</p>
            <a href="https://operanditech.co.za" target="_blank" rel="nofollow">Visit</a>
        </div>
    </div>
    <!-- End drawer scroll area -->
</aside>