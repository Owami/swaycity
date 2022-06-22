<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include_once("core/connect.php");
$message = "";
if (isset($_POST["register"])) {
    if (empty($_POST["first_name"]) || empty($_POST["last_name"])) {
        $message = '<label for="">All fields are required</label>';
    } else {
        $query = "INSERT INTO staff (name, surname, username, u_level,gender, password , u_level_s,u_level_f,  contact) VALUE(:name, :surname, :username, :u_level, :gender, :password , :u_level_s,:u_level_f, :contact)";
        $stmt = $connect->prepare($query);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $name = $_POST['first_name'];
        $last = $_POST['last_name'];
        $uname = "twh$name$last";
        $defaults = '100';
        $data = array(
            ':name' => $_POST['first_name'],
            ':surname' => $_POST['last_name'],
            ':username' => $uname,
            ':gender' => $_POST['gender'],
            ':u_level' => $_POST['access'],
            ':u_level_s' => $defaults,
            ':u_level_f' => $defaults,
            ':contact' => $_POST['mobile'],
            ':password' => $password

        );
        $stmt->execute($data);
        $count = $stmt->rowCount();
        if ($count > 0) {
            header('location:staff');
            $message = '<label for=""> User Created</label>';
        } else {
            $message = '<label for="">Wrong Info</label>';
            echo($message);
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
                        <input placeholder="First Name" id="first_name" name="first_name" type="text" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Last Name" id="last_name" name="last_name" type="text" class="validate" required>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 tm-pr-xs-0" required>
                            <select name="gender">
                                <option value="-">Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field">
                        <input placeholder="Mobile" id="mobile" name="mobile" type="text" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" placeholder="Please enter Password" required>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 tm-pr-xs-0" required>
                            <select name="access">
                                <option value="-">Access level</option>
                                <option value="5">Sales</option>
                                <option value="1">Management</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text" name="register">Register</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-r">
                <header class="mb-5">
                    <h3 class="mt-0 text-white">Operandi Negozio</h3>
                    <p class="grey-text">Register.</p>

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