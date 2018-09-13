<?php
header("HTTP/1.0 404 Not Found");
require 'config/config.php';
?>
<?php require 'config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;user-scalable=true;"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="robots" content="noindex, nofollow"/>
    <title>Medgenome | Index</title>

    <script src="js/vendors/angular-1.5.8.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
<div class="header">

    <?php require 'includes/logo.php';?>

    <div class="headerMenu">
        <?php require 'includes/menu.php';?>
    </div>
    <div class="mobileMenu">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="dropDown mobmenu" style="display: none;">
        <ul>
            <li><a title ="HOME" href="javascript:;">Home</a></li>
            <li><a title ="TEST CATALOG" href="javascript:;">test cATALOG</a></li>
            <li><a title ="CLINICIANS LOGIN" href="javascript:;">Clinicians login</a></li>
            <!--<li><a title ="FAQ’S" href="javascript:;">FAQ’S</a></li>
            <li><a title ="KNOWLEDGE HUB" href="javascript:;">knowledge Hub</a></li>-->
            <li><a title ="RESEARCH" href="javascript:;">research</a></li>
            <li><a title ="ABOUT" href="javascript:;">ABOUT</a></li>
        </ul>
    </div>


    <?php require 'includes/header-contact.php';?>

</div>
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
<?php require 'includes/footer-contact.php';?>
</body>
</html>
