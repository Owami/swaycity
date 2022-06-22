<!DOCTYPE html>
<?php $HT = 'Staff';
$nav2 = 'active';
session_start();
if (!isset($_SESSION['twhOperandiNegozio'])) {

    header("location:login");
}
require('core/connect.php');
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
                        <div class="col-sm-6 col-lg-4">
                            <a class="card" href="register">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Total Staff</p>
                                        <p class="h3 text-blue m-t-sm m-b-0"><?php print_r($staffcount); ?></p>
                                        <button class="btn btn-app-blue btn-block"  type="button">Add New</button>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-people fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->

                        <div class="col-sm-6 col-lg-4">
                            <a class="card bg-green bg-inverse" href="javascript:void(0)">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Males</p>
                                        <p class="h3 m-t-sm m-b-0"><?php print_r($mcount); ?></p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-contact fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->

                        <div class="col-sm-6 col-lg-4">
                            <a class="card bg-blue bg-inverse" href="javascript:void(0)">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Females</p>
                                        <p class="h3 m-t-sm m-b-0"><?php print_r($fcount); ?></p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-contact fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->


                        <!-- .col-sm-6 -->
                    </div>
                    <div class="row">
                        <?php
                        foreach ($datastaff as $key => $value) {
                            if ($value['award'] == 'TBD') {
                                # code...
                            } else {
                                include('includes/components/staffcard.php');
                            }
                        }
                        ?>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Employee List</h4>
                        </div>
                        <div class="card-block">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th class="hidden-xs">Gender</th>
                                        <th class=" hidden-xs">Contact</th>
                                        <th class="hidden-xs">Position</th>
                                        <th class="hidden-xs w-20">User Access</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($datastaff as $key => $value) {
                                        include('includes/components/stafflist.php');
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- .card-block -->
                    </div>
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

    <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="assets/js/core/jquery.placeholder.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/app-custom.js"></script>

    <!-- Page Plugins -->
    <script src="assets/js/plugins/slick/slick.min.js"></script>
    <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.stack.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/base_tables_datatables.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/index.js"></script>
    <script>
        $(function() {
            // Init page helpers (Slick Slider plugin)
            App.initHelpers('slick');
        });
    </script>

</body>

</html>