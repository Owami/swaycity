<div class="col-sm-6 col-lg-3">
    <a class="card" href="">
        <div class="card-block text-center">
            <img class="img-avatar img-avatar-96" src="assets/img/avatars/ava.jpg" alt="" />
            <p class="h6 profile-title"><?php print($value['name']); ?> <?php print($value['surname']); ?></p>
        </div>
        <div class="card-block bg-gray-lighter-o">
            <div class="text-center text-muted"><?php print($value['award']); ?></div>
        </div>
        <div class="card-block">
            <div class="row text-center">
                <div class="col-xs-6">
                    <i class="ion-ios-cart fa-1-5x"></i>
                    <div><small class="text-muted"><?php print($value['perf']); ?></small></div>
                </div>
                <div class="col-xs-6">
                    <i class="ion-ios-pricetag fa-1-5x"> </i>
                    <div><small class="text-muted"><?php print($value['perf']); ?></small></div>
                </div>
            </div>
        </div>
    </a>
</div>