<!DOCTYPE html>
<html>

<head>
    <?php
    include("includes/main/meta.php");
    require('core/connect.php');
    $dataindication = $_GET['uid'];
    $invrec;
    $statementrec = $connect->prepare("SELECT * FROM transactions WHERE transaction_id = :transaction_id");
    $statementrec->bindValue(':transaction_id', $dataindication);
    $statementrec->execute();
    $datatrans = $statementrec->fetchAll(PDO::FETCH_ASSOC);
    $statementrec2 = $connect->prepare("SELECT * FROM cart WHERE session_id  = :session_id");
    $statementrec2->bindValue(':session_id', $dataindication);
    $statementrec2->execute();
    $datatrans2 = $statementrec2->fetchAll(PDO::FETCH_ASSOC);
    $data = array();
    foreach ($datatrans as $key => $value) {
        array_push($data, $value);
        ?>
    </head>

    <body onload="window.print();">
        <div class="wrapper">
            <!-- Main content -->
            <section class="invoice">
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
                            <i class="fa fa-globe"></i> Together We Heal, PTY
                            <small class="pull-right"><?php print($value['date_of_sale']); ?></small>
                        </h2>
                        <h1 class="page-header pull-right">
                            <i class=" ion-ios-barcode"></i> Reciept

                        </h1>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        From
                        <address>
                            <strong>Together We Heal, PTY</strong><br>
                            26 Boslorie Street<br>
                            Eastlynne, Pretoria <br>
                            <br>
                            Email: twh@operanditech.co.za
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        To
                        <address>
                            <strong><?php print($value['client']); ?></strong><br>

                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <b>Reciept #00<?php print($value['id']); ?></b><br>
                        <br>
                        <b>Order ID:</b> <?php print(substr($value['transaction_id'], -4)); ?><br>


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>Item Name</td>
                                    <td>Grams / Units</td>
                                    <td>Cost</td>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($datatrans2 as $key2 => $value2) {
                                    ?>
                                    <tr>
                                        <td><?php print_r($value2['item']); ?></td>
                                        <td><?php print_r($value2['ui']); ?> </td>
                                        <td>R<?php print_r($value2['total']); ?></td>
                                    </tr>
                                <?php
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <!-- accepted payments column -->

                    <!-- /.col -->
                    <div class="col-xs-6">
                        <p class="lead">Amount </p>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Total:</th>
                                    <td>R<?php print($value['totalsale']); ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->

            </section>
            <!-- /.content -->
        </div>
        <!-- ./wrapper -->
    </body>

    </html>
<?php
}
?>