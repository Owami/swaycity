<tr>
    <td class="text-center inv1"><?php print($key1 + 1); ?></td>
    <td class="font-500 inv1"><?php print($value2['cat']); ?></td>
    <td class="inv1"><?php print($value2['p_name']); ?> </td>
    <td class="hidden-xs inv1"> <?php print($value2['quantity']); ?></td>
    <td class="hidden-xs inv1">R <?php print($value2['costper']); ?></td>
    <td class="hidden-xs inv1">R <?php
                                    $cost = $value2['quantity'] / $value2['tcost'];
                                    print($cost);

                                    ?></td>
    <td class="hidden-xs inv1">R <?php
                                    $market = $value2['quantity'] * $value2['costper'];
                                    print($market);

                                    ?></td>
    <td class="text-center">
        <div class="btn-group">
        
            <button class="btn btn-xs btn-default" type="button" data-toggle="modal" data-target="#modalpic<?php print($key1 + 1); ?>" title="Edit "><i class="ion-edit"></i></button>
            
        </div>
    </td>
    <td class="text-center">
        <div class="btn-group">
        
            <button class="btn btn-xs btn-default" type="button" data-toggle="modal" data-target="#modal<?php print($key1 + 1); ?>" title="Edit "><i class="ion-edit"></i></button>
            <form action="handleinv.php" method="post">
                <input type="hidden" name="user_id" value="<?php print($value2['id']); ?>">
                <button class="btn btn-xs btn-default" type="submit" name="delete" data-toggle="tooltip" title="Remove "><i class="ion-close"></i></button></form>

        </div>
    </td>
    <div class="modal" id="modal<?php print($key1 + 1); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4>Edit Product</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <div class="row">
                        <form class="form-horizontal m-t-sm" action="handleinv.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-text" name="names" value="<?php print($value2['cat']); ?>" required />
                                        <input class="form-control" type="hidden" id="material-text" name="iden" value="<?php print($value2['id']); ?>" />
                                        <label for="material-text">Category</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-password" name="surnames" value="<?php print($value2['p_name']); ?>" required />
                                        <label for="material-password" />Product</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class="form-material">
                                        <input class="form-control" type="number" id="material-email" name="genders" value="<?php print($value2['quantity']); ?>" required>
                                        <label for="material-email">Quantity</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class="form-material">
                                        <input class="form-control" type="number" id="material-email" name="contacts" value="<?php print($value2['pricepg']); ?>" required>
                                        <label for="material-email">Selling Price Per Item</label>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group m-b-0">
                                <div class="col-sm-9">
                                    <button class="btn btn-app" name="update" type="submit">Submit <i class="ion-checkmark"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modalpic<?php print($key1 + 1); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="card-header bg-blue bg-inverse">
                    <h4><?php print($value2['p_name']); ?> Pictures</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <form class="dropzone" action="base_forms_pickers_select.html"></form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</tr>