<!DOCTYPE html>
<?php $HT = 'Dashboard';
$nav = 'active';
session_start();
if (!isset($_SESSION['twhOperandiNegozio'])) {

    header("location:login");
}
if ($_SESSION['u_level_main_twh'] == '5') {
    header("location:pos");
}
require('core/connect.php');
include('includes/data/rev.php');
?>
<html class="app-ui">

<head>
    <!-- Meta -->
    <!-- Document title -->
    <title>Dashboard | TWH</title>
    <?php include("includes/main/meta.php"); ?>
    <!--for the staff section -->
    <?php include('includes/data/staff.php'); ?>
    <!-- End Stylesheets -->
</head>

<body class="app-ui layout-has-drawer layout-has-fixed-header">
    <div class="app-layout-canvas">
        <div class="app-layout-container">

            <!-- Drawer -->
            <?php include("includes/main/nav.php"); ?>
            <!-- End drawer -->
            <?php include("includes/main/top.php"); ?>

            <!-- Header -->

            <!-- End header -->

            <main class="app-layout-content">

                <!-- Page Content -->
                <div class="container-fluid p-y-md">
                    <!-- Stats -->
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <a class="card" href="javascript:void(0)">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Revenue</p>
                                        <p class="h3 text-blue m-t-sm m-b-0">R<?php print($totalrev); ?></p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-bell fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->

                        <div class="col-sm-6 col-lg-3">
                            <a class="card bg-green bg-inverse" href="javascript:void(0)">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Total customers</p>
                                        <p class="h3 m-t-sm m-b-0"><?php print($clientcount); ?></p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-people fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->

                        <div class="col-sm-6 col-lg-3">
                            <a class="card bg-blue bg-inverse" href="javascript:void(0)">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Inventory Worth</p>
                                        <p class="h3 m-t-sm m-b-0">R<?php print($invw2); ?></p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-speedometer fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->

                        <div class="col-sm-6 col-lg-3">
                            <a class="card bg-purple bg-inverse" href="javascript:void(0)">
                                <div class="card-block clearfix">
                                    <div class="pull-right" id="staffcount1">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Total Staff</p>
                                        <p class="h3 m-t-sm m-b-0"><?php print_r($staffcount); ?></p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-people fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->
                    </div>
                    <!-- .row -->
                    <!-- End stats -->

                    <div class="row">
                        <!-- Company overview Chart -->
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header bg-blue bg-inverse">
                                    <h4>Company Performance</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <span class="label bg-green">Stat<span class="hidden-xs">istic</span>s <i class="ion-connection-bars"></i></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-block p-b-0 bg-blue bg-inverse">
                                    <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples please check http://www.chartjs.org/docs/ -->
                                    <div style="height: 200px;"><canvas class="js-chartjs-lines1" id="companyperf " width="800" height="450"></canvas></div>
                                </div>
                                <div class="card-block">
                                    <div class="row">

                                        <div class="col-xs-6 col-lg-3 b-r visible-lg">
                                            <p class="h6 small text-muted">Total Profits</p>
                                            <p class="h3 m-t-0 m-b-md">R<?php print($profresult); ?></p>
                                            <div class="progress progress-mini m-b-sm">
                                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3 b-r visible-lg">
                                            <p class="h6 small text-muted">Expenses</p>
                                            <p class="h3 m-t-0 m-b-md">R<?php print($costt); ?></p>
                                            <div class="progress progress-mini m-b-sm">
                                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <p class="h6 small text-muted">Total revenue</p>
                                            <p class="h3 m-t-0 m-b-md">R<?php print($totalrev); ?></p>
                                            <div class="progress progress-mini m-b-sm">
                                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .row -->
                                </div>
                                <!-- .card-block -->
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col-lg-8 -->
                        <!-- End Company overview Chart -->

                        <!-- Weekly transactions Widget -->
                        <div class="col-lg-4">
                            <!-- Staff Widget -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>Staff</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <button type="button" data-toggle="card-action" data-action="fullscreen_toggle"></button>
                                        </li>
                                        <li>
                                            <button type="button" id="refreshstaff" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-android-refresh"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" data-toggle="card-action" data-action="content_toggle"></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-block">
                                    <div class="pull-r-l pull-t m-b">
                                        <table class="card-table text-center bg-gray-lighter-o b-b">
                                            <tbody>
                                                <tr class="row">
                                                    <td class="col-xs-6 b-r" id="staffcount2">
                                                        <p class="h1"><?php print_r($staffcount); ?></p>
                                                        <p class="h6 text-muted m-t-0">Staff</p>
                                                    </td>
                                                    <td class="col-xs-6">
                                                        <i class="ion-person-stalker fa-3x text-muted"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <ul class="list-users" id="staff">
                                        <?php foreach ($datastaff as $key => $value) {
                                            include('includes/components/stafftag.php');
                                        } ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Friends Widget -->
                        </div>
                        <!-- .col-lg-4 -->
                        <!-- End Weekly transactions Widget -->
                    </div>
                    <!-- .row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Yearly summary widget -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>Inventory Performance </h4>

                                    <!-- .card-actions -->
                                </div>
                                <!-- .card-header -->
                                <div class="card-block">
                                    <div class="row" style="width: 100%; overflow-x: auto;overflow-y:hidden">
                                        <div style="width: 3000px, height: 300px">
                                            <canvas class="js-chartjs-lines4" height="300" width="0"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- .card-block -->
                            </div>
                            <!-- .card -->
                            <!-- End Yearly summary widget -->
                        </div>
                        
                        <!-- .col-lg-8 -->


                    </div>
                    <!-- .row -->
                </div>
                <!-- .container-fluid -->
                <!-- End Page Content -->

            </main>

        </div>
        <!-- .app-layout-container -->
    </div>
    <!-- .app-layout-canvas -->

    <!-- Apps Modal -->
    <!-- Opens from the button in the header -->
    <div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-sm modal-dialog modal-dialog-top">
            <div class="modal-content">
                <!-- Apps card -->
                <div class="card m-b-0">
                    <div class="card-header bg-app bg-inverse">
                        <h4>Apps</h4>
                        <ul class="card-actions">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-block">
                        <div class="row text-center">
                            <div class="col-xs-6">
                                <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                                    <i class="ion-speedometer fa-4x"></i>
                                    <p>Admin</p>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                                    <i class="ion-laptop fa-4x"></i>
                                    <p>Frontend</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- .card-block -->
                </div>
                <!-- End Apps card -->
            </div>
        </div>
    </div>
    <!-- End Apps Modal -->

    <div class="app-ui-mask-modal"></div>


    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="assets/js/core/jquery.placeholder.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/app-custom.js"></script>
    <script src="assets/js/pages/indexmain.js"></script>
    <script src="assets/js/pages/invperf.js"></script>
    <script src="assets/js/pages/invperf1.js"></script>

    <!-- Page Plugins -->
    <script src="assets/js/plugins/slick/slick.min.js"></script>
    <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.stack.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.resize.min.js"></script>


    <!-- Page JS Code -->


    <script type="text/javascript">
        $("#refreshstaff").click(function() {
            $("#staff").load(" #staff > *");
            $("#staffcount1").load(" #staffcount1 > *");
            $("#staffcount2").load(" #staffcount2 > *");
        });
    </script>
    <script>
        $(function() {
            // Init page helpers (Slick Slider plugin)
            App.initHelpers('slick');
        });
    </script>


</body>

</html>