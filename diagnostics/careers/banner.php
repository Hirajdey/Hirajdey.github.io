<?php require 'php-templates/header.php'; ?>

<div class="container">
    <div class="row" style="padding: 20px;">
        <div class="col-md-7 text-center" style="border: 1px solid grey; padding: 80px; margin: 0px 5px 0px 2px;"><a href="#/" style="padding: 10px;">Management</a></div>
        <div class="col-md-7 text-center" style="border: 1px solid grey; padding: 80px; margin: 0px 5px 0px 2px;"><a href="#/directors" style="padding: 10px;">Directors</a></div>
        <div class="col-md-7 text-center" style="border: 1px solid grey; padding: 80px; margin: 0px 5px 0px 2px;"><a href="#/advisors" style="padding: 10px;">Advisors</a></div>
    </div>
</div>

<div class="container" ng-app="leadershipApp">
   <!-- <div class="row">
        <div class="col-md-24 text-center">
            <a href="#/" style="padding: 10px;">Management</a>
            <a href="#/directors" style="padding: 10px;">Directors</a>
            <a href="#/advisors" style="padding: 10px;">Advisors</a>
            <a href="#/investors" style="padding: 10px;">Investors</a>
            <a href="#/iec" style="padding: 10px;">MG_IEC</a>
        </div>
    </div>-->
        <div ng-view></div>
</div>

<script src="js/angularjs/leadership.js"></script>
<?php require 'php-templates/footer.php';?>