<tr>
    <td class="text-center"><?php print($key1 + 1); ?></td>
    <td class="font-500"><?php print($value2['cat']); ?></td>
    <td class="hidden-xs"><?php print($value2['strain']); ?> </td>
    <td class="hidden-xs"> <?php print($value2['quantity']); ?> /grams</td>

    <td class="text-center">
        <div class="btn-group">
            <button class="btn btn-xs btn-default" type="button" data-toggle="modal" data-target="#modal-<?php print($value2['id']); ?><?php print($value2['inv_id']); ?>"><i class="ion-bag"></i></button>

        </div>
    </td>
    <div class="modal" id="modal-<?php print($value2['id']); ?><?php print($value2['inv_id']); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4>Add to Cart</h4><span class="badge"><?php print($value2['cat']); ?></span>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <div class="row">
                        <form name="cartform" action="addtocart.php" method="post" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="ion-bag"></i></span>
                                        <input class="form-control" type="text" id="" name="item" value="<?php print($value2['strain']); ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="ion-bookmark"></i></span>
                                        <input class="form-control" type="text" id="" name="units" placeholder=".." />
                                        <span class="input-group-addon">.grams</span>
                                    </div>
                                </div>
                            </div>
                            <input class="form-control" type="hidden" id="" name="catcart" value="<?php print($value2['cat']); ?>" />
                            <input class="form-control" type="hidden" id="" name="tokeni" value="<?php print($token); ?>" />
                            <input class="form-control" type="hidden" id="" name="cost" value="<?php print($value2['pricepg']); ?>" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-app" type="submit" name="add" value="add" id="addc"><i class="ion-checkmark"></i> Ok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</tr>