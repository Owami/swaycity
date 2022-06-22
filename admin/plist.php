<!DOCTYPE html>
<?php $HT = 'Client Area';
$nav5 = 'active';
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
    <?php include('includes/data/clients.php'); ?>
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
                            <a class="card" href="clientreg">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Single Client</p>

                                        <button class="btn btn-app-blue btn-block" type="button">Add New</button>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-people fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->
                        <div class="col-sm-6 col-lg-4">
                            <a class="card" href="clientup">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Bulk Add Clients</p>

                                        <button class="btn btn-app-blue btn-block" type="button">Add New</button>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-people fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- .col-sm-6 -->
                        <div class="col-sm-6 col-lg-4">
                            <a class="card" href="export_csv">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Total Clients</p>
                                        <p class="h3 text-blue m-t-sm m-b-0"><?php print_r($clientcount); ?></p>
                                        <button class="btn btn-app-blue btn-block" type="button">Export to csv</button>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-people fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- .col-sm-6 -->
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4>Client List</h4>
                        </div>
                        <div class="card-block">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Medical Condition</th>
                                        <th class="hidden-xs">Email</th>
                                        <th class=" hidden-xs">Contact</th>
                                        <th class="hidden-xs">Address</th>
                                        <th class="hidden-xs w-20">Discount</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($dataclients as $key => $value) {
                                        include('includes/components/clientlist.php');
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