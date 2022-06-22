<!DOCTYPE html>
<html lang="en">

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

<body id="login">
    <div class="container">
        <div class="row tm-register-row tm-mb-35">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-l">
                
                <form name="signin-form" id="signin-form" action="" method="post" class="tm-bg-black p-5 h-100">
                    <div class="input-field">
                        <input placeholder="User Name" id="username" name="username" type="text" class="validate">
                    </div>
                    <div class="input-field mb-5">
                        <input placeholder="Password" id="password" name="password" type="password" class="validate">
                    </div>
                    <div class="tm-flex-lr">

                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0" id="signin" name="signin" value="login" id="loginn" style="background-color: white;">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-r">
                <header class="font-weight-light tm-bg-black p-5 h-100">
                    <h3 class="mt-0 text-white font-weight-light">Operandi Negozio</h3>
                    <p>Registered to - SwayCity</p>
                    <div id="error-msg" class="alert alert-danger" style="display:none" role="alert"></div>
                </header>
            </div>

        </div>


    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(function() {
            $('#signin').click(function(e) {

                let self = $(this);

                e.preventDefault(); // prevent default submit behavior

                $(this).prop('disabled', true);

                var data = $('#signin-form').serialize(); // get form data

                // sending ajax reqeust to login.php file, it will proccess login reqeust and give response.
                $.ajax({
                    url: 'submit.php',
                    type: "POST",
                    data: data,
                }).done(function(res) {
                    res = JSON.parse(res);
                    if (res['status']) // if login successful redirect user to secure.php page.
                    {
                        location.href = "index"; // redirect user to secure.php location/page.
                    } else {

                        var errorMessage = '';
                        // if there is any errors convert array of errors into html string, 
                        //here we are wrapping errors into a paragraph tag.
                        console.log(res.msg);
                        $.each(res['msg'], function(index, message) {
                            errorMessage += '<p>' + message + '</p>';
                        });
                        // place the errors inside the div#error-msg.
                        $("#error-msg").html(errorMessage);
                        $("#error-msg").show(); // show it on the browser, default state, hide
                        // remove disable attribute to the login button, 
                        //to prevent multiple form submisstions 
                        //we have added this attributon on login from submit
                        self.prop('disabled', false);
                    }
                }).fail(function() {
                    alert("error");
                }).always(function() {
                    self.prop('disabled', false);
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>

</body>

</html>