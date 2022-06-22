<tr>
    <td class="text-center"><?php print($key + 1); ?></td>
    <td class="font-500"><?php print($value['name']); ?></td>
    <td class=""><?php print($value['surname']); ?></td>
    <td class=""><?php print($value['gender']); ?></td>
    <td class="hidden-xs"><?php print($value['contact']); ?></td>
    <td class="hidden-xs"><?php print($value['position']); ?></td>
    <td class="hidden-xs"><?php print($value['u_level']); ?></td>
    <td class="text-center">
        <div class="btn-group">
            <button class="btn btn-xs btn-default" type="button" data-toggle="modal" data-target="#modal<?php print($key + 1); ?>" title="Edit "><i class="ion-edit"></i></button>
            <form action="handle.php" method="post">
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
                        <form class="form-horizontal m-t-sm" action="handle.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-text" name="names" value="<?php print($value['name']); ?>" required />
                                        <input class="form-control" type="hidden" id="material-text" name="iden" value="<?php print($value['id']); ?>" />
                                        <label for="material-text">Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-password" name="surnames" value="<?php print($value['surname']); ?>" required />
                                        <label for="material-password" />Surname</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-email" name="genders" value="<?php print($value['gender']); ?> " required>
                                        <label for="material-email">gender</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-email" name="contacts" value="<?php print($value['position']); ?>" required>
                                        <label for="material-email">Contact</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="material-email" name="positions" value="<?php print($value['position']); ?>" required>
                                        <label for="material-email">Position</label>
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