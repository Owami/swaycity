<form class="fieldset">
    <h3 class="m-t-sm m-b">General info</h3>
    <div class="form-group row">
        <div class="col-xs-6">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" value="<?php print($q2['name']); ?>" />
        </div>
        <div class="col-xs-6">
            <label for="exampleInputName2">Surname</label>
            <input type="text" class="form-control" id="exampleInputName2" value="<?php print($q2['surname']); ?>" />
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-6">
            <label for="exampleInputPhone1">Mobile phone</label>
            <input type="tel" class="form-control" id="exampleInputPhone1" value="<?php print($q2['contact']); ?>" />
        </div>
        <div class="col-xs-6">
            <label for="exampleInputPhone2">Position</label>
            <input type="datetime-local" class="form-control" id="exampleInputPhone2" value="<?php print($q2['position']); ?>" />
        </div>
    </div>
    
    <h4 class="m-t-md m-b">Change password</h4>
    <div class="form-group row">
        <div class="col-xs-6">
            <label for="exampleInputPassword1">Confirm current password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" />
        </div>
        <div class="col-xs-6">
            <label for="exampleInputPassword2">Confirm new password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" />
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-6">
            <label for="exampleInputPassword3">New password</label>
            <input type="password" class="form-control" id="exampleInputPassword3" />
        </div>
    </div>
    <div class="row narrow-gutter">
        <div class="col-xs-6">
            <button type="button" class="btn btn-default btn-block">Cancel</button>
        </div>
        <div class="col-xs-6">
            <button type="button" class="btn btn-app btn-block">Save<span class="hidden-xs"> changes</span></button>
        </div>
    </div>
</form>