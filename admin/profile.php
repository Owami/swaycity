<!DOCTYPE html>
<?php $HT = 'Profile';
$navp = 'active';
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
    <?php include("includes/main/meta.php");
    include("includes/data/profiledata.php");
    ?>
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


                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-profile-img bg-img" style="background-image: url(assets/img/misc/base_pages_profile_header_bg.jpg);">
                                </div>
                                <div class="card-block card-profile-block text-xs-center text-sm-left">
                                    <img class="img-avatar img-avatar-96" src="assets/img/avatars/ava.jpg" alt="" />
                                    <div class="profile-info font-500"> <?php print_r($_SESSION['name_main_twh']); ?> <?php print_r($_SESSION['surname_main_twh']); ?>
                                        <div class="small text-muted m-t-xs"><?php print_r($_SESSION['contact_twh']); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active">
                                        <a href="#acc-tab" data-toggle="tab">Account</a>
                                    </li>
                                    <li>
                                        <a href="#perf-tab" data-toggle="tab">Performance</a>
                                    </li>
                                    <li>
                                        <a href="#stat-tab" data-toggle="tab">Messages</a>
                                    </li>

                                </ul>
                                <!-- .nav-tabs -->
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-block tab-content">
                                    <!-- Profile tab 1 -->
                                    <div class="tab-pane fade in active" id="acc-tab">
                                        <?php
                                        foreach ($data as $q1 => $q2) {
                                            include('includes/components/profilegen.php');
                                        }

                                        ?>
                                    </div>
                                    <!-- End profile tab 1 -->

                                    <!-- Profile tab 2 -->
                                    <div class="tab-pane fade" id="perf-tab">
                                        <h3 class="m-t-sm m-b">Performance</h3>
                                        <div class="row">
                                            <?php
                                            $mainarray = array();
                                            
                                            $comm = array();
                                            $date = date('F-Y');
                                            //Separate the dates
                                            foreach ($data2 as $s1 => $s2) {
                                                $rw = $s2['timestamp'];
                                                $position = strpos($rw, $date);
                                                if ($position === false) {
                                                    
                                                } else {
                                                   array_push($mainarray, $s2);
                                                }
                                            }
                                            // Separate the dates
                                            foreach ($mainarray as $m1 => $m2) {
                                                $re = $m2['cat'];

                                                if ($re == 'Greenhouse') {
                                                    array_push($comm, $m2['ui']);
                                                }
                                            }
                                            $totalsales = count($mainarray);
                                            $commsum = array_sum($comm);
                                            $dig = 0;
                                            switch ($commsum) {
                                                case $commsum <= 5:
                                                    $dig = 5;
                                                    break;
                                                case $commsum <= 10:
                                                    $dig = 10;
                                                    break;
                                                case $commsum <= 20:
                                                    $dig = 20;
                                                    break;
                                                case $commsum <= 30:
                                                    $dig = 30;
                                                    break;
                                                case $commsum <= 40:
                                                    $dig = 40;
                                                    break;
                                                case $commsum <= 50:
                                                    $dig = 50;
                                                    break;
                                                case $commsum <= 60:
                                                    $dig = 60;
                                                    break;
                                                case $commsum <= 70:
                                                    $dig = 70;
                                                    break;
                                                case $commsum <= 80:
                                                    $dig = 80;
                                                    break;
                                                case $commsum <= 90:
                                                    $dig = 90;
                                                    break;
                                                case $commsum <= 100:
                                                    $dig = 100;
                                                    break;
                                                case $commsum <= 150:
                                                    $dig = 140;
                                                    break;
                                                case $commsum <= 250:
                                                    $dig = 150;
                                                    break;
                                                case $commsum <= 500:
                                                    $dig = 170;
                                                    break;
                                                case $commsum <= 1000:
                                                    $dig = 190;
                                                    break;

                                                default:
                                                    # code...
                                                    break;
                                            }
                                            //  print_r($commsum);
                                            ?>

                                            <div class="col-sm-6 col-lg-3">
                                                <a class="card bg-green bg-inverse" href="javascript:void(0)">
                                                    <div class="card-block clearfix">
                                                        <div class="pull-right">
                                                            <p class="h6 text-muted m-t-0 m-b-xs">Total Sales</p>
                                                            <p class="h3 m-t-sm m-b-0"><?php print($totalsales); ?></p><span>This month</span>
                                                        </div>
                                                        <div class="pull-left m-r">
                                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-cart fa-1-5x"></i></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- .col-sm-6 -->
                                            <div class="col-sm-6 col-lg-3">
                                                <a class="card bg-blue bg-inverse" href="javascript:void(0)">
                                                    <div class="card-block clearfix">
                                                        <div class="pull-right">
                                                            <p class="h6 text-muted m-t-0 m-b-xs">Total Commission</p>
                                                            <p class="h3 m-t-sm m-b-0">R <?php print($dig); ?></p><span>This month</span>
                                                        </div>
                                                        <div class="pull-left m-r">
                                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-grid-view-outline fa-1-5x"></i></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-sm-6 col-lg-3">
                                                <a class="card bg-green bg-inverse" href="javascript:void(0)">
                                                    <div class="card-block clearfix">
                                                        <div class="pull-right">
                                                            <p class="h6 text-muted m-t-0 m-b-xs">Sales Effieciancy</p>
                                                            <p class="h3 m-t-sm m-b-0">+10%</p><span>This month</span>
                                                        </div>
                                                        <div class="pull-left m-r">
                                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-speedometer fa-1-5x"></i></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            <!-- .col-sm-6 -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card bg-blue bg-inverse">
                                                <div class="card-header">
                                                    <h4></h4>

                                                    <!-- .card-actions -->
                                                </div>
                                                <!-- .card-header -->
                                                <div class="card-block p-b-0">
                                                    <div style="height: 268px;"><canvas class="js-chartjs-lines2"></canvas></div>
                                                </div>
                                                <div class="card-block text-center">
                                                    <span class="label bg-green m-r-xs">Statistics <i class="ion-connection-bars"></i></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End profile tab 2 -->

                                    <!-- Profile tab 3 -->
                                    <div class="tab-pane fade" id="stat-tab">
                                        <div class="b-b m-b-md">
                                            <h2>3 <small class="h5 text-muted">Messages</small></h2>
                                        </div>
                                        <table class="table table-striped table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th><i class="ion-ios-briefcase text-muted m-r-xs"></i> Subject </th>
                                                    <th class="text-center hidden-xs w-15"><i class="ion-person-stalker text-muted m-r-xs"></i> From</th>
                                                    <th class="text-center hidden-xs hidden-sm w-15"><i class="ion-arrow-graph-up-right text-muted m-r-xs"></i> </th>
                                                    <th class="text-right" style="width: 15%; min-width: 110px;"> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- <tr>
                                                    <td>
                                                        <h3 class="h5 m-b-xs">
                                                            <a href="javascript:void(0)">Admin template</a>
                                                        </h3>
                                                        <p><span class="label label-success"><i class="ion-checkmark m-r-xs"></i> Completed</span></p>
                                                        <div class="font-s13 text-muted hidden-xs">
                                                            <p>Kickstarter equal opportunity. Activist catalyze carbon rights opportunity, fellows care sanitation achieve Martin Luther King Jr. synthesize inspire breakthroughs. Reproductive rights investment
                                                                dedicated working families human rights accessibility...</p>
                                                        </div>
                                                    </td>
                                                    <td class="h3 text-center hidden-xs">6</td>
                                                    <td class="h3 text-center hidden-xs hidden-sm">400</td>
                                                    <td class="h3 text-blue text-right">$ 12,100</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h3 class="h5 m-b-xs">
                                                            <a href="javascript:void(0)">Frontend template</a>
                                                        </h3>
                                                        <p><span class="label label-primary"><i class="ion-refresh m-r-xs"></i> In Progress</span></p>
                                                        <div class="font-s13 text-muted hidden-xs">
                                                            <p>Action Against Hunger; facilitate; reproductive rights investment dedicated working families human rights accessibility nonviolent resistance Arab Spring microloans prevention development.</p>
                                                        </div>
                                                    </td>
                                                    <td class="h3 text-center hidden-xs">-</td>
                                                    <td class="h3 text-center hidden-xs hidden-sm">-</td>
                                                    <td class="h3 text-blue text-right">-</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h3 class="h5 m-b-xs">
                                                            <a href="javascript:void(0)">Ui kit</a>
                                                        </h3>
                                                        <p><span class="label label-success"><i class="ion-checkmark m-r-xs"></i> Completed</span></p>
                                                        <div class="font-s13 text-muted hidden-xs">
                                                            <p>Kickstarter, minority democracy; resolve, organization Jane Jacobs United Nations equal opportunity. Activist catalyze carbon rights opportunity, fellows care sanitation achieve Martin Luther King
                                                                Jr. synthesize inspire breakthroughs.</p>
                                                        </div>
                                                    </td>
                                                    <td class="h3 text-center hidden-xs">3</td>
                                                    <td class="h3 text-center hidden-xs hidden-sm">724</td>
                                                    <td class="h3 text-blue text-right">$ 9,345</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h3 class="h5 m-b-xs">
                                                            <a href="javascript:void(0)">Stock images</a>
                                                        </h3>
                                                        <p><span class="label label-danger"><i class="ion-close m-r-xs"></i> Cancelled</span></p>
                                                        <div class="font-s13 text-muted hidden-xs">
                                                            <p>Kickstarter, minority democracy; resolve, organization Jane Jacobs United Nations equal opportunity. Activist catalyze carbon rights opportunity, fellows care sanitation achieve. Reproductive rights
                                                                investment dedicated working families human rights accessibility nonviolent resistance Arab Spring microloans prevention development.</p>
                                                        </div>
                                                    </td>
                                                    <td class="h3 text-center hidden-xs">-</td>
                                                    <td class="h3 text-center hidden-xs hidden-sm">-</td>
                                                    <td class="h3 text-blue text-right">-</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h3 class="h5 m-b-xs">
                                                            <a href="javascript:void(0)">Html framework</a>
                                                        </h3>
                                                        <p><span class="label label-success"><i class="ion-checkmark m-r-xs"></i> Completed</span></p>
                                                        <div class="font-s13 text-muted hidden-xs">
                                                            <p>Kickstarter, minority democracy; resolve, organization Jane Jacobs United Nations equal opportunity. Activist catalyze carbon rights opportunity, fellows care sanitation achieve. Action Against Hunger;
                                                                facilitate; reproductive rights investment dedicated working families human rights accessibility nonviolent resistance.</p>
                                                        </div>
                                                    </td>
                                                    <td class="h3 text-center hidden-xs">8</td>
                                                    <td class="h3 text-center hidden-xs hidden-sm">521</td>
                                                    <td class="h3 text-blue text-right">$ 9,780</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h3 class="h5 m-b-xs">
                                                            <a href="javascript:void(0)">Flat Icon Set</a>
                                                        </h3>
                                                        <p><span class="label label-success"><i class="ion-checkmark m-r-xs"></i> Completed</span></p>
                                                        <div class="font-s13 text-muted hidden-xs">
                                                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt
                                                                himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                                        </div>
                                                    </td>
                                                    <td class="h3 text-center hidden-xs">1</td>
                                                    <td class="h3 text-center hidden-xs hidden-sm">94</td>
                                                    <td class="h3 text-blue text-right">$ 4,870</td>
                                                </tr> -->
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- End profile tab 3 -->



                                </div>
                                <!-- .card-block .tab-content -->
                            </div>
                            <!-- .card -->
                        </div>
                        <div class="col-md-4">

                            <!-- .card -->
                        </div>
                        <!-- .col-md-4 -->


                        <!-- .col-md-8 -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- End Page Content -->

            </main>

        </div>
        <!-- .app-layout-container -->
    </div>




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