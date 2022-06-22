<div class="col-sm-6 col-lg-4">
    <a class="card bg-blue bg-inverse" target="_blank" href="receiptq?uid=<?php print_r($transk2['transaction_id']); ?>">
        <div class=" card-block clearfix">
            <div class="pull-right">
                <p class="h6 text-muted m-t-0 m-b-xs"><?php print_r($transk2['client']); ?></p>
                <p class="h3 m-t-sm m-b-0">R<?php print_r($transk2['totalsale']); ?></p>
            </div>
            <div class="pull-left m-r">
                <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-cart fa-1-5x"></i></span>
            </div>
        </div>
        <div class="card-block">
            <button class="btn btn-app-teal btn-block" data-toggle="modal" data-target="#modal-normal" type="button">View</button>
        </div>
    </a>
</div>