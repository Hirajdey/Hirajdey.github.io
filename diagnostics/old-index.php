<?php
require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/vendors/angular-1.5.8.min.js"></script>
    <script src="js/vendors/jquery-2.1.4.min.js"></script>
    <script src="js/vendors/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
<?php require 'includes/contact-popup.php';?>
<nav class="navbar navbar-default navbar-fixed-top header">
    <div class="container-fluid">
        <div class="navbar-header logo">
            <a class="navbar-brand" href="/">
                <!--<img src="images/us/logo.png" alt="Medgenome Logo">-->
                <img src="images/logo/logo.png" alt="Medgenome Logo">
            </a>
        </div>
        <ul class="nav navbar-nav menu">
            <li><a href="https://www.medgenome.com/about">About</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Publications</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right contact-detail">
            <li>
                <div><a href="mailto: research@medgenome.com">research@medgenome.com / (888) 440-0954</a> <a href="https://www.medgenome.com/research" target="_blank"><img src="images/us/us-flag.png" alt="US Flag"></a></div>
                <div><a href="mailto: diagnostics@medgenome.com">diagnostics@medgenome.com / 1800 103 3691</a> <img src="images/us/india-flag.png" alt="India Flag"></div>
            </li>
            <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
        </ul>
    </div>
</nav>

<div class="container-fluid home-page-container">
    <div class="row">
        <div class="col-md-24 text-center main-header">
            <h1>unlocking the answers to genetic diseases</h1>
        </div>
    </div>
    <!-- body -->
    <div class="row">
        <div class="col-md-12 index-page-body">
            <div id="research" class="research">
                <div class="research-text"><h1>Research</h1></div>
                <div class="research-sub-text">[Americas and Europe]</div>
                <div class="research-description"><p>Medgenome's research focuses on "finding a needle in the haystack" to provide insights into the cause of several complex genetic disorders.</p></div>
                <div class="learn-more"><a href="https://www.medgenome.com/research" target="_blank">LEARN MORE >></a></div>
            </div>
        </div>
        <div class="col-md-12 index-page-body">
            <div id="diagnostics" class="diagnostics">
                <div class="diagnostics-text"><h1>Diagnostics</h1></div>
                <div class="diagnostics-sub-text">[India]</div>
                <div class="diagnostics-description"><p>The right diagnostics paves the way for better treatment. Medgenome offers the best diagnostic tools for a focused treatment pathway.</p></div>
                <div class="learn-more"><a href="https://diagnostics.medgenome.com/claria/claria.php" target="_blank">LEARN MORE >></a></div>
                <!--<div class="logos">
                    <ul class="list-inline">
                        <li><a href="https://diagnostics.medgenome.com/claria/" target="_blank"><img src="images/us/claria-logo.png" alt="research announce" style="margin-top: -7px"></a></li>
                        <li><a href="https://diagnostics.medgenome.com/actia/cardio-genetic.php" target="_blank"><img src="images/us/actia-logo.png" alt="research announce"></a></li>
                        <li><a href="https://diagnostics.medgenome.com/prima/somatic-cancer.php" target="_blank"><img src="images/us/prima-logo.png" alt="research announce"></a></li>
                    </ul>
                </div>-->

                <!--<div class="announcement">
                    <ul class="list-inline">
                        <li><img src="images/us/speaker.png" alt="research announce"></li>
                        <li style="width:77%">Medgenome announces its new research hub in Paris aimed at facilitating new innovations.</li>
                        <li><img src="images/us/right-arrow.png" alt="research announce"></li>
                    </ul>
                </div>-->
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div class="row home-page-footer">
        <div class="col-md-5 text-center">
            <img src="images/us/whitelogo.png" alt="white logo">
        </div>
        <div class="col-md-6 text-center">
            <h3>Follow Us</h3>
            <div class="social-media">
                <ul>
                    <li class="tw"><a href="https://twitter.com/MedGenomeLabs" target="_blank">Twitter</a></li>
                    <li class="linked"><a href="https://www.linkedin.com/company-beta/3563868/" target="_blank">Linkedin</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="contact-info">Contact Info</h3>
            <div class="footer-us">
                <ul>
                    <li style="list-style-type: none;">
                        <ul>
                            <li class="footer-country-us"><span>UNITED STATES</span></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li class="footermail"><a href="mailto: research@medgenome.com"> research@medgenome.com</a></li>
                    <li class="footerPhone"><span>(888) 440-0954</span></li>
                    <li class="footerAddr"><span>MedGenome Inc.<br>
                        348 Hatch Drive<br>
                        Foster City, CA 94404, USA</span></li>
                </ul>
            </div>
        </div>
        <div class="col-md-7">
            <h3 class="contact-info">&nbsp;</h3>
            <div class="footer-us">
                <ul>
                    <li style="list-style-type: none;">
                        <ul>
                            <li class="footer-country-india"><span>INDIA<span></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li class="footermail"><a href="mailto: diagnostics@medgenome.com">diagnostics@medgenome.com</a></li>
                    <li class="footerPhone"><span>1800 103 3691</span></li>
                    <li class="footerAddr"><span>MedGenome Labs Ltd.,<br>
                        3rd Floor, Narayana Netralaya Building,<br>
                        Narayana Health City,<br>
                        # 258/A, Bommasandra, Hosur Road,<br>
                        Bangalore – 560 099, India.<span></li>
                </ul>
            </div>
        </div>

        </div>
    </div>
</div>

<script>
    $( "#research" ).click(function() {
        window.location.href = "https://www.medgenome.com/research";
    });
    $( "#diagnostics" ).click(function() {
        window.location.href = "https://diagnostics.medgenome.com/claria/claria.php";
    });
</script>
</body>
</html>
