<tr>
    <td class="text-center inv2"><?php print($key2 + 1); ?></td>
    <td class="font-500 inv2"><?php print($value3['cat']); ?></td>
    <td class="inv2"><?php print($value3['p_name']); ?> </td>
    <td class="hidden-xs inv2"> <?php print($value3['quantity']); ?></td>
    <td class="hidden-xs inv2">R <?php print($value3['costper']); ?></td>
    <td class="hidden-xs inv2">R <?php
                                    $selling = $value3['quantity'] / $value3['tcost'];
                                    print($selling);

                                    ?></td>
    <td class="hidden-xs inv2">R <?php
                                    $market = $value3['quantity'] * $value3['costper'];
                                    print($market);
                                    ?></td>
    <td class="text-center">
        <div class="btn-group">
            <button class="btn btn-xs btn-default" type="button" data-toggle="modal" data-target="#modalp<?php print($key2 + 1); ?>" title="Edit "><i class="ion-edit"></i></button>
            <form action="handleinvp.php" method="post">
                <input type="hidden" name="user_id" value="<?php print($value3['id']); ?>">
                <button class="btn btn-xs btn-default" type="submit" name="delete" data-toggle="tooltip" title="Remove "><i class="ion-close"></i></button></form>
        </div>
    </td>
    <div class="modal" id="modalp<?php print($key2 + 1); ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <form class="form-horizontal m-t-sm" action="handleinvp.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-text" name="names" value="<?php print($value3['cat']); ?>" required />
                                        <input class="form-control" type="hidden" id="material-text" name="iden" value="<?php print($value3['id']); ?>" />
                                        <label for="material-text">Category</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-password" name="surnames" value="<?php print($value3['p_name']); ?>" required />
                                        <label for="material-password" />Product</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class="form-material">
                                        <input class="form-control" type="number" id="material-email" name="genders" value="<?php print($value3['quantity']); ?>" required>
                                        <label for="material-email">Quantity</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class="form-material">
                                        <input class="form-control" type="number" id="material-email" name="contacts" value="<?php print($value3['costper']); ?>" required>
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
</tr>