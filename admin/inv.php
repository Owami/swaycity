<!DOCTYPE html>
<?php $HT = 'Inventory';
$nav4 = 'active';
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
    <title>Dashboard | SwayCity</title>
    <?php include("includes/main/meta.php"); ?>
    <?php include("includes/data/inv.php"); ?>
    <?php include("includes/data/invp.php"); ?>
    <?php include("includes/data/inva.php"); ?>
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
                                        <p class="h6 text-muted m-t-0 m-b-xs">Total Catagories</p>
                                        <p class="h3 text-blue m-t-sm m-b-0"><?php print_r($invcount); ?> - Womens</p>
                                        <p class="h3 text-blue m-t-sm m-b-0"><?php print_r($invpcount); ?> - Mens</p>
                                        <p class="h3 text-blue m-t-sm m-b-0"><?php print_r($invacount); ?> - Accessories </p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-rose fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->

                        <div class="col-sm-6 col-lg-3">
                            <a class="card bg-green bg-inverse" href="javascript:void(0)">
                                <div class="card-block clearfix">
                                    <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Total Units</p>
                                        <p class="h3 m-t-sm m-b-0"><?php print_r($totalgrams); ?>/ui</p>
                                        <p class="h3 m-t-sm m-b-0"><?php print_r($totalitems); ?>/ui</p>
                                        <p class="h3 m-t-sm m-b-0"><?php print_r($totalitems); ?>/ui</p>
                                    </div>
                                    <div class="pull-left m-r">
                                        <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-pie fa-1-5x"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- .col-sm-6 -->


                        <!-- .col-sm-6 -->
                    </div>
                    <!-- .row -->
                    <!-- End stats -->

                    <div class="row">
                        <!-- Company overview Chart -->
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header">
                                    <h4>Inventory Overview Products</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <span class="label bg-green">Stat<span class="hidden-xs">istic</span>s <i class="ion-connection-bars"></i></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-block p-b-0  ">
                                    <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples please check http://www.chartjs.org/docs/ -->
                                    <div style="height: 200px;"><canvas class="js-chartjs-lines10"></canvas></div>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-xs-6 col-lg-3 b-r visible-lg">
                                            <p class="h6 small text-muted">Women</p>
                                            <p class="h3 m-t-0 m-b-md"><?php print_r($totalgrams); ?> /g</p>
                                            <div class="progress progress-mini m-b-sm">
                                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3 b-r visible-lg">
                                            <p class="h6 small text-muted">Men</p>
                                            <p class="h3 m-t-0 m-b-md"><?php print_r($totalitems); ?> /units</p>
                                            <div class="progress progress-mini m-b-sm">
                                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3 b-r visible-lg">
                                            <p class="h6 small text-muted">Accessories </p>
                                            <p class="h3 m-t-0 m-b-md"><?php print_r($totalitems); ?> /units</p>
                                            <div class="progress progress-mini m-b-sm">
                                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <p class="h6 small text-muted">Stock Networth</p>
                                            <p class="h3 m-t-0 m-b-md">R <?php print_r($totalcost1); ?> WM / R<?php print_r($totalcost22); ?> M / R<?php print_r($totalcost22); ?> M</p>
                                            <div class="progress progress-mini m-b-sm">
                                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .row -->
                                </div>
                                <!-- .card-block -->
                            </div>
                            <!-- .card -->
                        </div>

                    </div>
                    <!-- .row -->

                    <div class="card">
                        <div class="card-header">
                            <h4>Inventory Women</h4>
                            <ul class="card-actions">
                                <button class="btn btn-app-cyan btn-block tocsvinv1" type="button">Export</button>
                                <button class="btn btn-app-green btn-block" data-toggle="modal" data-target="#invmodalm" type="button">Capture</button>
                            </ul>
                        </div>
                        <div class="card-block">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full inv1">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Category</th>
                                        <th class="hidden-xs">Product</th>
                                        <th class="hidden-xs">Quantity on hand</th>
                                        <th class="hidden-xs w-20">Selling Price per item</th>
                                        <th>Cost Price per item</th>
                                        <th class="hidden-xs w-20">Market value of stock</th>
                                        <th class="text-center" style="width: 10%;">Pictures</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($datainv as $key1 => $value2) {
                                        include('includes/components/invlist.php');
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Inventory Men</h4>
                            <ul class="card-actions">
                                <!-- <a href="https://api.whatsapp.com/send?phone=27760108613">Whatsapp</a> -->
                                <button class="btn btn-app-cyan btn-block tocsvinv2" type="button">Export</button>
                                <button class="btn btn-app-green btn-block" data-toggle="modal" data-target="#invmodalp" type="button">Capture</button>
                            </ul>
                        </div>
                        <div class="card-block">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full inv2">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Category</th>
                                        <th class="hidden-xs">Product</th>
                                        <th class="hidden-xs">Quantity on hand</th>
                                        <th class="hidden-xs w-20">Selling Price per item</th>
                                        <th>Cost Price per item</th>
                                        <th class="hidden-xs w-20">Market value of stock</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($datainvp as $key2 => $value3) {
                                        include('includes/components/invlistp.php');
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Inventory Accessories</h4>
                            <ul class="card-actions">
                                <button class="btn btn-app-cyan btn-block tocsvinv2" type="button">Export</button>
                                <button class="btn btn-app-green btn-block" data-toggle="modal" data-target="#invmodalp2" type="button">Capture</button>
                            </ul>
                        </div>
                        <div class="card-block">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full inv2">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Category</th>
                                        <th class="hidden-xs">Product</th>
                                        <th class="hidden-xs">Quantity on hand</th>
                                        <th class="hidden-xs w-20">Selling Price per item</th>
                                        <th>Cost Price per item</th>
                                        <th class="hidden-xs w-20">Market value of stock</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($datainva as $key2 => $value3) {
                                        include('includes/components/invlista.php');
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- .row -->


                    <!-- .row -->
                </div>
                <!-- .container-fluid -->
                <!-- End Page Content -->

            </main>

        </div>
        <!-- .app-layout-container -->
    </div>
    <!-- .app-layout-canvas -->

    <div class="modal fade" id="invmodalm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4>Category: Women</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
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
                                        <a class="inactive" href="#validation-step1" data-toggle="tab">1. Type of stock</a>
                                    </li>
                                    <li>
                                        <a class="inactive" href="#validation-step2" data-toggle="tab">2. Unit details</a>
                                    </li>
                                    <li>
                                        <a class="inactive" href="#validation-step3" data-toggle="tab">3. Finalize</a>
                                    </li>
                                </ul>
                                <!-- End Step Tabs -->

                                <!-- Form -->
                                <!-- jQuery Validation (.js-form2 class is initialized in js/pages/base_forms_wizard.js) -->
                                <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-form2 form-horizontal" action="includes/data/insertinv.php" method="post">
                                    <!-- Steps Content -->

                                    <div class="card-block tab-content">
                                        <!-- Step 1 -->
                                        <div class="tab-pane fade fade-right in m-t-md m-b-lg active" id="validation-step1">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <select class="form-control" id="category" name="category" required>
                                                            <option value="">Please select</option>
                                                            <option value="Pants">Pants</option>
                                                            <option value="Dresses">Dresses</option>
                                                            <option value="Shoes">Shoes</option>
                                                            <option value="Tops">Tops</option>
                                                            <option value="Jackets">Jackets</option>

                                                        </select>
                                                        <label for="val-skill2">Category</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation-firstname" name="validation-strain" placeholder="Please enter the Product Name" required />
                                                        <label for="validation-firstname">Product Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="number" id="validation-lastname" name="validation-grams" placeholder="Please enter the Units Purchased" required>
                                                        <label for="validation-lastname">Units Purchased</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="number" id="validation-email" name="validation-cost" placeholder="Please enter the cost of the entire stock" required>
                                                        <label for="validation-email">Total Cost</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation-email" name="validation-supplier" placeholder="(Optional)">
                                                        <label for="validation-email">Supplier</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step 1 -->

                                        <!-- Step 2 -->
                                        <div class="tab-pane fade fade-right m-t-md m-b-lg" id="validation-step2">

                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="number" id="validation-details" name="validation-cost2" rows="9" placeholder="Eg; R250 " required></input>
                                                        <label for="validation-details">Selling Price Price per Unit</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Step 2 -->

                                        <!-- Step 3 -->
                                        <div class="tab-pane fade fade-right m-t-md m-b-lg" id="validation-step3">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation-city" name="auth" placeholder="Name and Surname" value="<?php print_r($_SESSION['name_main_twh']); ?> <?php print_r($_SESSION['surname_main_twh']); ?>">
                                                        <label for="validation-city">Name </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation-city" name="date" placeholder="14-Feb-19" value="<?php print(date("d F Y")); ?>">
                                                        <label for="validation-city">Date </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label class="css-input switch switch-sm switch-primary" for="validation-terms">
                                                        <input type="checkbox" id="validation-terms" name="validation-terms" required><span></span> Agree with the <a data-toggle="modal" data-target="#modal-terms" required>terms</a>
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
    <div class="modal fade" id="invmodalp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4>Category: Men</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <div class="row">

                        <div class="col-lg-12">
                            <!-- Classic Validation Wizard (.js-wizard-classic-validation class is initialized in js/pages/base_forms_wizard.js) -->
                            <!-- For more examples please check http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                            <div class="card js-wizard-classic-validation">
                                <!-- Step Tabs -->
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active">
                                        <a class="inactive" href="#validation-classic-step1" data-toggle="tab">1. Type of stock</a>
                                    </li>
                                    <li>
                                        <a class="inactive" href="#validation-classic-step2" data-toggle="tab">2. Unit Details</a>
                                    </li>
                                    <li>
                                        <a class="inactive" href="#validation-classic-step3" data-toggle="tab">3. Finalize</a>
                                    </li>
                                </ul>
                                <!-- End Step Tabs -->

                                <!-- Form -->
                                <!-- jQuery Validation (.js-form1 class is initialized in js/pages/base_forms_wizard.js) -->
                                <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-form1 validation form-horizontal" action="includes/data/insertinvp.php" method="post">
                                    <!-- Steps Content -->
                                    <div class="card-block tab-content">
                                        <!-- Step 1 -->
                                        <div class="tab-pane m-t-md m-b-lg active" id="validation-classic-step1">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="validation-classic-skills">Category</label>
                                                    <select class="form-control" id="category" name="category" size="1" required>
                                                        <option value="">Please select the category</option>
                                                        <option value="Pants">Pants</option>
                                                        <option value="Hoodies">Hoodies</option>
                                                        <option value="Shoes">Shoes</option>
                                                        <option value="T-Shirts">T-Shirts</option>
                                                        <option value="Socks">Socks</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="validation-classic-firstname">Product Name</label>
                                                    <input class="form-control" type="text" id="product-name" name="product-name" placeholder="Please enter the product name" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="validation-classic-lastname">Units Purchased</label>
                                                    <input class="form-control" type="number" id="quantity" name="quantity-purchased" placeholder="The amount of units purchased " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="validation-classic-email">Cost</label>
                                                    <input class="form-control" type="number" id="cost" name="costp" placeholder="Total cost" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step 1 -->

                                        <!-- Step 2 -->
                                        <div class="tab-pane m-t-md m-b-lg" id="validation-classic-step2">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="validation-classic-details">Selling Price Per Unit</label>
                                                    <input class="form-control" type="number" id="priceperitem" name="priceperitem" placeholder="Selling Price Per Item" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step 2 -->

                                        <!-- Step 3 -->
                                        <div class="tab-pane m-t-md m-b-lg" id="validation-classic-step3">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation-city" name="auth" placeholder="Name and Surname" value="<?php print_r($_SESSION['name_main_twh']); ?> <?php print_r($_SESSION['surname_main_twh']); ?>" required>
                                                        <label for="validation-city">Name </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation-city" name="date" placeholder="14-Feb-19" value="<?php print(date("d F Y")); ?>" required>
                                                        <label for="validation-city">Date </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label class="css-input switch switch-sm switch-primary" for="simple-classic-progress-terms">
                                                        <input type="checkbox" id="simple-classic-progress-terms" name="terms" required><span></span> Agree with the <a data-toggle="modal" data-target="#modal-terms" href="#">terms</a>
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
                            <!-- End Classic Validation Wizard -->
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
    <div class="modal fade" id="invmodalp2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card-header bg-orange bg-inverse">
                    <h4>Capture Products</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <div class="row">

                        <div class="col-lg-12">
                            <!-- Classic Validation Wizard (.js-wizard-classic-validation class is initialized in js/pages/base_forms_wizard.js) -->
                            <!-- For more examples please check http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                            <div class="card js-wizard-classic-validation">
                                <!-- Step Tabs -->
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active">
                                        <a class="inactive" href="#validation-classic-step1" data-toggle="tab">1. Type of stock</a>
                                    </li>
                                    <li>
                                        <a class="inactive" href="#validation-classic-step2" data-toggle="tab">2. Product Details</a>
                                    </li>
                                    <li>
                                        <a class="inactive" href="#validation-classic-step3" data-toggle="tab">3. Finalize</a>
                                    </li>
                                </ul>
                                <!-- End Step Tabs -->

                                <!-- Form -->
                                <!-- jQuery Validation (.js-form1 class is initialized in js/pages/base_forms_wizard.js) -->
                                <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-form1 validation form-horizontal" action="includes/data/insertinvp.php" method="post">
                                    <!-- Steps Content -->
                                    <div class="card-block tab-content">
                                        <!-- Step 1 -->
                                        <div class="tab-pane m-t-md m-b-lg active" id="validation-classic-step1">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="validation-classic-skills">Category</label>
                                                    <select class="form-control" id="category" name="category" size="1" required>
                                                        <option value="">Please select the category</option>
                                                        <option value="Soap">Soap</option>
                                                        <option value="Juice">Juice</option>
                                                        <option value="Bong">Bong</option>
                                                        <option value="Growing Nutrients">Growing Nutrients</option>
                                                        <option value="Honey">Honey</option>
                                                        <option value="Shampoo">Shampoo</option>
                                                        <option value="Conditioner">Conditioner</option>
                                                        <option value="Bags">Bags</option>
                                                        <option value="Pencil Cases">Pencil Cases</option>
                                                        <option value="Cream">Cream</option>
                                                        <option value="Ointment">Ointment</option>
                                                        <option value="Body Butter">Body Butter</option>
                                                        <option value="Accessories">Accessories</option>
                                                        <option value="Seeds">Seeds</option>
                                                        <option value="Animal">Animal</option>
                                                        <option value="RSO Oil">RSO Oil</option>
                                                        <option value="CBD Oil">CBD Oil</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="validation-classic-firstname">Product Name</label>
                                                    <input class="form-control" type="text" id="product-name" name="product-name" placeholder="Please enter the product name" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="validation-classic-lastname">Quantity Purchased</label>
                                                    <input class="form-control" type="number" id="quantity" name="quantity-purchased" placeholder="The quantity " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="validation-classic-email">Cost</label>
                                                    <input class="form-control" type="number" id="cost" name="costp" placeholder="Total cost" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step 1 -->

                                        <!-- Step 2 -->
                                        <div class="tab-pane m-t-md m-b-lg" id="validation-classic-step2">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label for="validation-classic-details">Selling Price Per Item</label>
                                                    <input class="form-control" type="number" id="priceperitem" name="priceperitem" placeholder="Selling Price Per Item" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Step 2 -->

                                        <!-- Step 3 -->
                                        <div class="tab-pane m-t-md m-b-lg" id="validation-classic-step3">
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation-city" name="auth" placeholder="Name and Surname" value="<?php print_r($_SESSION['name_main_twh']); ?> <?php print_r($_SESSION['surname_main_twh']); ?>" required>
                                                        <label for="validation-city">Name </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="validation-city" name="date" placeholder="14-Feb-19" value="<?php print(date("d F Y")); ?>" required>
                                                        <label for="validation-city">Date </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <label class="css-input switch switch-sm switch-primary" for="simple-classic-progress-terms">
                                                        <input type="checkbox" id="simple-classic-progress-terms" name="terms" required><span></span> Agree with the <a data-toggle="modal" data-target="#modal-terms" href="#">terms</a>
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
                            <!-- End Classic Validation Wizard -->
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

    <div class="app-ui-mask-modal"></div>

    <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="assets/js/core/jquery.placeholder.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/tocsv.js"></script>
    <script src="assets/js/tocsv2.js"></script>

    <script src="assets/js/pages/invperf1.js"></script>
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
    <script src="assets/js/pages/base_tables_datatables.js"></script>
    <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/plugins/dropzonejs/dropzone.min.js"></script>
    <!-- Page JS Code -->
    <script src="assets/js/pages/inventory.js"></script>

    <!-- Page JS Code -->

    <script>
        $(function() {
            // Init page helpers (Slick Slider plugin)
            App.initHelpers('slick');
        });
    </script>

</body>

</html>