<div class="col-sm-6 col-lg-4">
    <a class="card bg-green bg-inverse" target="_blank" href="invoiceq?uid=<?php print_r($transk['transaction_id']); ?>">
        <div class=" card-block clearfix">
            <div class="pull-right">
                <p class="h6 text-muted m-t-0 m-b-xs"><?php print_r($transk['client']); ?></p>
                <p class="h3 m-t-sm m-b-0">R<?php print_r($transk['totalsale']); ?></p>
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