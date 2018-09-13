<?php
header("HTTP/1.0 404 Not Found");
require 'php-templates/header.php';
//require 'config/config.php';
?>
<html>
<head>
    <title>404 Error - Page Not Found</title>
    <link rel="stylesheet" href="<?php echo $site_path;?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $site_path;?>/css/custom.css">
</head>
<!--<body>404 Error - Page Not Found!</body>-->
<div class="container error404">
    <div class="row">
        <div class="text-center errortexttop">Oops! Something Went Wrong</div>
    </div>
    <div class="row">
        <div class="text-center errornumber text-danger">404</div>
    </div>
    <div class="row">
        <div class="text-center errortextbottom text-danger">Page not Found</div>
    </div>
    <div class="row">
        <div class="text-center errortextbottom">
            <a href="<?php echo $site_path;?>/index.php" class="btn btn-info btn-lg text-center">Take Me Home</a>
        </div>
    </div>
</div>
<?php require 'php-templates/footer.php';?>
