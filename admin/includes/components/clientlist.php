<tr>
    <td class="text-center"><?php print($key + 1); ?></td>
    <td class="font-500"><?php print($value['name']); ?></td>
    <td class=""><?php print($value['surname']); ?></td>
    <td class=""><?php print($value['med_case']); ?></td>
    <td class=""><?php print($value['email']); ?></td>
    <td class="hidden-xs">0<?php print($value['cell']); ?></td>
    <td class="hidden-xs"><?php print($value['street_add']); ?></td>
    <td class="hidden-xs"><?php print($value['discount']); ?>%</td>
    <td class="text-center">
        <div class="btn-group">
            <button class="btn btn-xs btn-default" type="button" data-toggle="modal" data-target="#modal<?php print($key + 1); ?>" title="Edit "><i class="ion-edit"></i></button>
            <form action="handlecl.php" method="post">
                <input type="hidden" name="user_id" value="<?php print($value['id']); ?>">
                <button class="btn btn-xs btn-default" type="submit" name="delete" data-toggle="tooltip" title="Remove "><i class="ion-close"></i></button></form>

        </div>
    </td>
    <div class="modal" id="modal<?php print($key + 1); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4>Edit User</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <div class="row">
                        <form class="form-horizontal m-t-sm" action="handlecl.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-text" name="names" value="<?php print($value['name']); ?>" />
                                        <label for="material-text">Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-password" name="surnames" value="<?php print($value['surname']); ?>" />
                                        <label for="material-password" />Surname</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-email" name="meds" value="<?php print($value['med_case']); ?>">
                                        <label for="material-email">Condition</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-email" name="cells" value="<?php print($value['cell']); ?>">
                                        <label for="material-email">Contact</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-email" name="streets" value="<?php print($value['street_add']); ?>">
                                        <label for="material-email">Street Address</label>
                                    </div>
                                </div>
                            </div>
                            <input class="form-control" type="hidden" id="material-email" name="iden" value="<?php print($value['id']); ?>">

                            <div class="form-group m-b-0">
                                <div class="col-sm-9">
                                    <button class="btn btn-app" name="update" type="submit">Submit</button>
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