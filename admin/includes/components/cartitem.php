<div class="col-sm-6 col-lg-3">
    <div class="card">
        <div class="card-header bg-cyan bg-inverse">
            <h4><?php print($valuecart['item']); ?></h4>
            <ul class="card-actions">
                <li>
                    <button type="button"><i class="ion-more"></i></button>
                </li>
            </ul>
        </div>
        <div class="card-block">
            <p><?php print($valuecart['ui']); ?> Amount</p><span class="badge">R<?php print($valuecart['total']); ?></span>
            <input type="hidden" name="com[]" value="<?php print($valuecart['com']); ?>">
            <input type="hidden" name="itemc[]" value="<?php print($valuecart['item']); ?>">
            <input type="hidden" name="amountc[]" value="<?php print($valuecart['ui']); ?>">
            <input type="hidden" name="sumc[]" value="<?php print($valuecart['total']); ?>">
            
        </div>
    </div>
</div>