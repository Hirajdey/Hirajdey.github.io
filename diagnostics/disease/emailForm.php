<div class="modal-header">
    <button type="button" class="close" ng-click="close()" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 class="modal-title">Login</h3>
</div>
<div class="modal-body">
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <div class="col-md-24">
                <input type="email" class="form-control" id="name" placeholder="email" ng-model="email">
                <div ng-show="emailValid" class="text-danger">Email field is invalid test</div>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button class="btn btn-info" type="button" ng-click="emailSubmit()">Submit</button>
    <button class="btn btn-info" type="button" ng-click="close()">Close</button>
</div>