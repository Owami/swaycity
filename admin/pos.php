<!DOCTYPE html>
<?php $HT = 'Point of sale';
$nav3 = 'active';
session_start();
if (!isset($_SESSION['twhOperandiNegozio'])) {

    header("location:login");
}
require('core/connect.php');
include("includes/data/inidrop.php");
include("includes/data/fetchdropsale.php");
include("includes/data/invrec.php");

if (isset($_SESSION['saletoken'])) {
    $salesession = 'complete';
    $showin = 'inherit';
    $token = $_SESSION['saletoken'];
    $cp = array();
    if ($datacart == null) {
        $cartitemcount = 0;
    } else {
        foreach ($datacart as $keycart => $valuecart) {
            array_push($cp, $valuecart['total']);
        }
        $cartitemcount = count($cp);
    }
} else {
    $salesession = 'new';
    $showin = 'none';
    $token = sha1(rand(1, 10000));
    $cartitemcount = 0;
}


?>
<html class="app-ui">

<head>
    <!-- Meta -->
    <!-- Document title -->
    <title>Dashboard | TWH</title>
    <?php include("includes/main/meta.php");

    ?>
    <link rel="stylesheet" id="css-app" href="assets/css/sweetalert2.css" />

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
                                        <p class="h6 text-muted m-t-0 m-b-xs">Sales this month</p>
                                        <p class="h3 text-blue m-t-sm m-b-0">TBD </p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-cart fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->

                        <div class="col-sm-6 col-lg-3">
                            <a class="card bg-green bg-inverse" href="javascript:void(0)">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Current Cart Cost</p>
                                        <p class="h3 m-t-sm m-b-0">R <?php
                                                                        if ($salesession == 'new') {
                                                                            print('0');
                                                                        } else {
                                                                            print(array_sum($cp));
                                                                        }


                                                                        ?></p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-pulse fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->

                        <!-- <div class="col-sm-6 col-lg-3">
                            <a class="card bg-blue bg-inverse" href="javascript:void(0)">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Popular</p>
                                        <p class="h3 m-t-sm m-b-0">TBD</p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-star fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                        <!-- .col-sm-6 -->

                        <div class="col-sm-6 col-lg-3">
                            <a class="card bg-purple bg-inverse" href="javascript:void(0)">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Current Cart Count</p>
                                        <p class="h3 m-t-sm m-b-0"><?php print($cartitemcount); ?></p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-stopwatch fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->
                    </div>
                    <!-- .row -->
                    <!-- End stats -->
                    <div class="row" style="display:<?php print($showin); ?>">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Inventory Medicine</h4>
                                </div>
                                <div class="card-block">
                                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                        <thead>
                                            <tr>
                                                <th class="text-center"></th>
                                                <th>Category</th>
                                                <th class="hidden-xs">Product</th>
                                                <th class="hidden-xs">Quantity on hand</th>

                                                <th class="text-center" style="width: 10%;">Add</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            foreach ($inv1 as $key1 => $value2) {
                                                include('includes/components/posinv.php');
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- .card-block -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Inventory Products</h4>
                                </div>
                                <div class="card-block">
                                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                        <thead>
                                            <tr>
                                                <th class="text-center"></th>
                                                <th>Category</th>
                                                <th class="hidden-xs">Product</th>
                                                <th class="hidden-xs">Quantity on hand</th>

                                                <th class="text-center" style="width: 10%;">Add</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            foreach ($inv2 as $pro1 => $proval) {
                                                include('includes/components/posinv1.php');
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- .card-block -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Company overview Chart -->
                        <div class="col-lg-4">
                            <div class="col-sm-6 col-lg-12">
                                <a class="card">
                                    <div class="card-block text-center bg-img" style="background-image: url('assets/img/photos/sale.jpg');">
                                        <img class="img-avatar img-avatar-96 img-avatar-thumb" src="assets/img/avatars/sale.jpg" alt="" />
                                    </div>
                                    <div class="card-block text-center">
                                        <p class="h6 profile-title m-b-xs">Make Sale</p>

                                        <div class="card-block">
                                            <?php
                                            switch ($salesession) {
                                                case 'new':
                                                    include('includes/components/droplist.php');
                                                    break;
                                                case 'complete':
                                                    echo '<button class="btn btn-app-green btn-block" data-toggle="modal" data-target="#salemodal" type="button">Complete</button>';
                                                    break;

                                                default:
                                                    # code...
                                                    break;
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- .card -->
                        </div>
                        <div class="col-lg-8">


                            <div class="card">
                                <ul class="nav nav-tabs" data-toggle="tabs">
                                    <li class="">
                                        <a href="#maintab">Invoices<span> <button class="btn btn-xs btn-pill btn-app-teal-outline" type="button"><?php print($counts); ?></button></span></a>
                                    </li>
                                    <li>
                                        <a href="#btabs-animated-slideup-profile">Receipts<span> <button class="btn btn-xs btn-pill btn-app-teal-outline" type="button"><?php print($county); ?></button></span></a>
                                    </li>
                                    <li class="pull-right active">
                                        <a href="#btabs-animated-slideup-settings" data-toggle="tooltip" title="Help"><i class="ion-ios-help"></i></a>
                                    </li>
                                </ul>
                                <div class="card-block tab-content">
                                    <div class="tab-pane fade fade-up in " id="maintab">
                                        <?php
                                        foreach ($s as $keys => $values) {
                                            include('includes/components/singleinvoice.php');
                                        }
                                        ?>
                                    </div>
                                    <div class="tab-pane fade fade-up" id="btabs-animated-slideup-profile">
                                        <?php
                                        foreach ($y as $keyt => $valuet) {
                                            include('includes/components/singlereceipt.php');
                                        }
                                        ?>
                                    </div>
                                    <div class="tab-pane fade fade-up active" id="btabs-animated-slideup-settings">
                                        <p>Help Message.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Email Center Widget -->
                        </div>

                        <!-- .col-lg-8 -->
                        <!-- End Company overview Chart -->

                        <!-- Weekly transactions Widget -->

                        <!-- .col-lg-4 -->
                        <!-- End Weekly transactions Widget -->
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


    <!-- Fade In Modal -->

    <div class="modal fade" id="salemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card-header bg-blue bg-inverse">
                    <h4>Make a Sale</h4>
                    <ul class="card-actions">
                        <form action="addtocart.php" method="post">
                            <input type="hidden" name="idcartitem" value="<?php print($token); ?>">
                            <button class="btn btn-xs btn-pill btn-app-red" type="submit" name="deletecartitem">Delete Cart </button>
                        </form>


                    </ul>

                </div>
                <div class="card-block">
                    <div class="row">

                        <div class="col-lg-12">
                            <!-- Validation Wizard (.js-wizard-validation class is initialized in js/pages/base_forms_wizard.js) -->
                            <!-- For more examples please check http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                            <div class="card js-wizard-validation">
                                <!-- Step Tabs -->
                                <ul class="nav nav-tabs nav-tabs-alt nav-justified">
                                    <li class="active">
                                        <a class="inactive" href="#validation1-step1" data-toggle="tab">1. Sale Type</a>
                                    </li>
                                    <li>
                                        <a class="inactive" href="#validation1-step2" data-toggle="tab">2. Items </a>
                                    </li>
                                    <li>
                                        <a class="inactive" href="#validation1-step3" data-toggle="tab">3. Finalize</a>
                                    </li>
                                </ul>
                                <!-- End Step Tabs -->

                                <!-- Form -->
                                <!-- jQuery Validation (.js-form2 class is initialized in js/pages/base_forms_wizard.js) -->
                                <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-form2 form-horizontal" action="processsale.php" method="post">
                                    <!-- Steps Content -->

                                    <div class="card-block tab-content">
                                        <!-- Step 1 -->
                                        <div class="tab-pane fade fade-right in m-t-md m-b-lg active" id="validation1-step1">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <select class="form-control" id="transaction-type" name="transaction-type" required>
                                                            <option value="">Please select</option>
                                                            <option value="Cash">Cash</option>
                                                            <option value="Credit">Credit</option>

                                                        </select>
                                                        <label for="validation-firstname">Cash Or Credit</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <select class="form-control" id="transaction-type2" name="transaction-type2" required>
                                                            <option value="">Please select</option>
                                                            <option value="Cashr">Cash</option>
                                                            <option value="Card Payment">Card Payment</option>

                                                        </select>
                                                        <label for="validation-lastname">Payment Time</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation" name="client-name" value="<?php print($_SESSION['posclient']) ?>" required>
                                                        <label for="">Client Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="number" id="discount" name="client-discount" placeholder="Amount Discounted in Rands?" onChange="changeDis();">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step 1 -->

                                        <!-- Step 2 -->
                                        <div class=" tab-pane fade fade-right m-t-md m-b-lg" id="validation1-step2">

                                            <div class="row">

                                                <?php
                                                $quicksum = array();
                                                foreach ($datacart as $keycart => $valuecart) {
                                                    include('includes/components/cartitem.php');
                                                    array_push($quicksum, $valuecart['total']);
                                                }


                                                ?>

                                            </div>
                                            <div class="alert alert-success" id="discountdis">

                                                <input type="hidden" name="" id="totalsum" value="<?php print(array_sum($quicksum)); ?>">
                                            </div>

                                            
                                                <input type="hidden" name="totalsum" id="dismount" value="">
                                            

                                            <div class="clearfix"></div>

                                        </div>
                                        <!-- End Step 2 -->

                                        <!-- Step 3 -->
                                        <div class="tab-pane fade fade-right m-t-md m-b-lg" id="validation1-step3">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation-city" name="validation-empname" value="<?php print_r($_SESSION['name_main_twh']); ?> <?php print_r($_SESSION['surname_main_twh']); ?>" required>
                                                        <label for="validation-city">Employee Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation-city" name="date-of-sale" value="<?php print(date("d F Y")); ?>" required>
                                                        <label for="validation-city">Date</label>
                                                    </div>
                                                    <input type="hidden" name="transid" value="<?php print($token); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label class="css-input switch switch-sm switch-primary" for="validation-terms">
                                                        <input type="checkbox" id="validation-terms" name="validation-terms" required><span></span> Agree with the <a data-toggle="modal" data-target="#modal-terms" href="#">terms</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step 3 -->
                                    </div>
                                    <!-- End Steps Content -->

                                    <!-- Steps Navigation -->
                                    <div class="card-block b-t">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="wizard-prev btn btn-default" type="button">Previous</button>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <button class="wizard-next btn btn-default" type="button">Next</button>
                                                <button class="wizard-finish btn btn-app" type="submit"><i class="ion-checkmark m-r-xs"></i> Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Steps Navigation -->
                                </form>
                                <!-- End Form -->
                            </div>
                            <!-- .card -->
                            <!-- End Validation Wizard Wizard -->
                        </div>
                        <!-- .col-lg-6 -->

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="client" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <form action="addtocart.php" method="post">
                <div class="modal-content">
                    <div class="card-header bg-green bg-inverse">
                        <h4>Client Name</h4>
                        <ul class="card-actions">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-block">
                        <select id="client" name="client">
                            <option value="">Select Client</option>
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "twh_negozio";
                            $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
                            if (mysqli_connect_errno()) {
                                printf("Connect failed: %s\n", mysqli_connect_error());
                                exit();
                            }
                            $sql = "SELECT id,name,surname,discount FROM clients ";
                            $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                            while ($rows = mysqli_fetch_assoc($resultset)) {
                                ?>
                                <option value="<?php echo $rows["name"]; ?> <?php echo $rows["surname"]; ?>"><?php echo $rows["name"]; ?> <?php echo $rows["surname"]; ?></option>

                            <?php } ?>
                        </select>
                        <input type="hidden" name="token" id="token" value="<?php print($token); ?>">
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <button class="btn btn-app-blue btn-block" type="submit" name="newsale">Proceed</button>

                            </div>
                            <div class="col-xs-6 text-right">
                                <a class="btn btn-app-cyan btn-block" href="clientreg">New Client</a>
                            </div>

                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- End Fade In Modal -->

    <div class="app-ui-mask-modal"></div>

    <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="assets/js/core/jquery.placeholder.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/app-custom.js"></script>
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/pages/base_tables_datatables.js"></script>

    <!-- Page Plugins -->
    <script src="assets/js/plugins/slick/slick.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>


    <script src="assets/js/pages/base_forms_wizard.js"></script>
    <script src="assets/js/pages/dyitems.js"></script>
    <script src="assets/js/pages/repeater.js"></script>
    <script src="assets/js/pages/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>


    <!-- Page JS Code -->
    <script src="assets/js/pages/index.js"></script>


    <script>
        $(function() {
            // Init page helpers (Slick Slider plugin)
            App.initHelpers('slick');
        });
    </script>
    <script>
        

        function changeDis() {

            var x = document.getElementById("discount");
            var z = document.getElementById("totalsum");
            var y = document.getElementById("dismount");
            var re = z.value - x.value;
            y.value = re;
            document.getElementById("discountdis").innerHTML = "<p><strong>Discount Amount</strong> R" + re + "</p>  ";

        }
    </script>


</body>

</html>