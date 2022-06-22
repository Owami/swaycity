$(document).ready(function () {

    $("#repeater").createRepeater();

    $('#repeater_form').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "insert.php",
            method: "POST",
            data: $(this).serialize(),
            success: function (data) {
                $('#repeater_form')[0].reset();
                $("#repeater").createRepeater();
                $('#success_result').html(data);
                /*setInterval(function(){
                    location.reload();
                }, 3000);*/
            }
        });
    });

});