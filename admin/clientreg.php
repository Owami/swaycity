<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include_once("core/connect.php");
$message = "";
if (isset($_POST["clientreg"])) {
    if (empty($_POST["first_name"]) || empty($_POST["last_name"])) {
        $message = '<label for="">All fields are required</label>';
    } else {
        $query = "INSERT INTO clients (name, surname, email, street_add,med_case,discount,cell) VALUE(:name, :surname, :email, :street_add, :med_case,:discount,:cell)";
        $stmt = $connect->prepare($query);
        $name = $_POST['first_name'];
        $last = $_POST['last_name'];
        $defaults = '100';
        $data = array(
            ':name' => $_POST['first_name'],
            ':surname' => $_POST['last_name'],
            ':email' => $_POST['email'],
            ':med_case' => $_POST['med'],
            ':street_add' => $_POST['address'],
            ':discount' => $_POST['discount'],
            ':cell' => $_POST['mobile'],

        );
        $stmt->execute($data);
        $count = $stmt->rowCount();
        if ($count > 0) {
            header('location:plist');
            $message = '<label for=""> User Created</label>';
        } else {
            $message = '<label for="">Wrong Info</label>';
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
                <form action="" method="post" class="tm-bg-black p-5 h-100">


                    <div class="input-field">
                        <input placeholder="First Name" id="first_name" name="first_name" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Last Name" id="last_name" name="last_name" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="E-mail" id="email" name="email" type="email" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Medical Condition" id="med" name="med" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Cellphone" id="mobile" name="mobile" type="number" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Address" id="address" name="address" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Discount ?" id="discount" name="discount" type="number" class="validate">
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text" name="clientreg">Register</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-r">
                <header class="mb-5">
                    <h3 class="mt-0 text-white">Operandi Negozio</h3>
                    <p class="grey-text">Add Client.</p>

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
</body>

</html>