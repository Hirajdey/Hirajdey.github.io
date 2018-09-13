<?php require 'php-templates/header.php'; ?>

<div class="container" ng-app="leadershipApp">
    <div class="row">
        <div class="col-md-24 text-center">
            <a href="#/" style="padding: 10px;">Management</a>
            <a href="#/directors" style="padding: 10px;">Directors</a>
            <a href="#/advisors" style="padding: 10px;">Advisors</a>
            <a href="#/investors" style="padding: 10px;">Investors</a>
            <a href="#/iec" style="padding: 10px;">MG_IEC</a>
        </div>
    </div>
        <div ng-view></div>
</div>
<script src="js/angularjs/leadership.js"></script>
<?php require 'php-templates/footer.php';?>