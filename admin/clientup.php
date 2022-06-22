<!DOCTYPE html>
<html lang="en">
<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "twh_negozio");
$message = "";
if (isset($_POST["import"])) {

    $fileName = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0) {

        $file = fopen($fileName, "r");

        while (($column = fgetcsv($file, 20000, ";")) !== FALSE) {
            $sqlInsert = "INSERT into clients (med_case,name,surname,email,cell,date_joined,discount,status,total_payments,total_due,street_add,city,prov)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "','" . $column[7] . "','" . $column[8] . "','" . $column[9] . "','" . $column[10] . "','" . $column[11] . "','" . $column[12] . "')";
            $result = mysqli_query($conn, $sqlInsert);

            if (!empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
                header('location:plist');
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Negozio</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="register">
    <div class="container">
        <div class="row tm-register-row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-l">
                <form action="" method="post" class="tm-bg-black p-5 h-100" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">



                    <div class="input-row">
                        <label class="col-md-12 control-label">Choose CSV File</label>
                        <input type="file" name="file" id="file" accept=".csv">
                        <button type="submit" id="submit" name="import" class="waves-effect btn-large btn-large-white px-4 black-text">Import</button>
                        <br />

                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-r">
                <header class="mb-5">
                    <h3 class="mt-0 text-white">Operandi Negozio</h3>
                    <p class="grey-text">Register.</p>
                    <?php echo $message; ?>
                </header>

            </div>
        </div>

    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/login-reg.js"></script>
    <script>
        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#frmCSVImport").on("submit", function() {

                $("#response").attr("class", "");
                $("#response").html("");
                var fileType = ".csv";
                var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
                if (!regex.test($("#file").val().toLowerCase())) {
                    $("#response").addClass("error");
                    $("#response").addClass("display-block");
                    $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
                    return false;
                }
                return true;
            });
        });
    </script>
</body>

</html>