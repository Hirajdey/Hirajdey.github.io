<?php require 'php-templates/header.php'; ?>
    <div class="media">
    <div class="container">
        <span class="title_logo">Media</span>
        <ul>

            <li>
                <a href="?year=2017"><div class="year" <?php if(isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'style="background-color: rgb(22, 193, 243); color: rgb(255, 255, 255);"'?>>2017</div></a>
                <?php if(isset($_REQUEST['year']) && $_REQUEST['year'] == '2017'){?>
                    <select name="2017" onchange="getMonth('2017')" id="2017">
                        <option selected="selected"></option>
                        <option value="january" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='january' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>January</option>
                        <option value="february" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='february' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>February</option>
                        <option value="march" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='march' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>March</option>
                        <option value="april" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='april' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>April</option>
                        <option value="may" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='may' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>May</option>
                        <option value="june" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='june' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>June</option>
                        <option value="july" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='july' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>July</option>
                        <option value="august" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='august' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>August</option>
                        <option value="september" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='september' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>September</option>
                        <option value="october" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='october' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>October</option>
                        <option value="november" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='november' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>November</option>
                        <option value="december" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='december' && isset($_REQUEST['year']) && $_REQUEST['year']=='2017') echo 'selected="selected"';?>>December</option>
                    </select>
                <?php } ?>
            </li>

            <li>
                <a href="?year=2016"><div class="year" <?php if(isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'style="background-color: rgb(22, 193, 243); color: rgb(255, 255, 255);"'?>>2016</div></a>
                <?php if(isset($_REQUEST['year']) && $_REQUEST['year'] == '2016'){?>
                <select name="2016" onchange="getMonth('2016')" id="2016">
                    <option selected="selected"></option>
                    <option value="january" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='january' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>January</option>
                    <option value="february" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='february' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>February</option>
                    <option value="march" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='march' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>March</option>
                    <option value="april" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='april' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>April</option>
                    <option value="may" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='may' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>May</option>
                    <option value="june" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='june' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>June</option>
                    <option value="july" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='july' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>July</option>
                    <option value="august" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='august' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>August</option>
                    <option value="september" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='september' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>September</option>
                    <option value="october" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='october' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>October</option>
                    <option value="november" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='november' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>November</option>
                    <option value="december" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='december' && isset($_REQUEST['year']) && $_REQUEST['year']=='2016') echo 'selected="selected"';?>>December</option>
                </select>
                <?php } ?>
            </li>

            <li>
                <a href="?year=2015"><div class="year" <?php if(isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'style="background-color: rgb(22, 193, 243); color: rgb(255, 255, 255);"';?>>2015</div></a>
                 <?php if(isset($_REQUEST['year']) && $_REQUEST['year'] == '2015'){?>
                <select name="2015" onchange="getMonth('2015')" id="2015">
                    <option selected="selected"></option>
                    <option value="january" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='january' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>January</option>
                    <option value="february" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='february' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>February</option>
                    <option value="march" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='march' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>March</option>
                    <option value="april" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='april' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>April</option>
                    <option value="may" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='may' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>May</option>
                    <option value="june" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='june' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>June</option>
                    <option value="july" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='july' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>July</option>
                    <option value="august" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='august' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>August</option>
                    <option value="september" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='september' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>September</option>
                    <option value="october" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='october' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>October</option>
                    <option value="november" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='november' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>November</option>
                    <option value="december" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='december' && isset($_REQUEST['year']) && $_REQUEST['year']=='2015') echo 'selected="selected"';?>>December</option>
                </select>
                 <?php } ?>
            </li>
             <li>
                <a href="?year=2014"><div class="year" <?php if(isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'style="background-color: rgb(22, 193, 243); color: rgb(255, 255, 255);"';?>>2014</div></a>
                <?php if(isset($_REQUEST['year']) && $_REQUEST['year'] == '2014'){?>
                 <select name="2014" onchange="getMonth('2014')" id="2014">
                    <option selected="selected"></option>
                    <option value="january" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='january' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>January</option>
                    <option value="february" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='february' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>February</option>
                    <option value="march" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='march' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>March</option>
                    <option value="april" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='april' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>April</option>
                    <option value="may" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='may' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>May</option>
                    <option value="june" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='june' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>June</option>
                    <option value="july" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='july' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>July</option>
                    <option value="august" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='august' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>August</option>
                    <option value="september" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='september' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>September</option>
                    <option value="october" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='october' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>October</option>
                    <option value="november" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='november' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>November</option>
                    <option value="december" <?php if(isset($_REQUEST['month']) && $_REQUEST['month']=='december' && isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'selected="selected"';?>>December</option>
                </select>
                <?php } ?>
            </li>
        </ul>

        <!-- Video-->
        <span class="title_logo">Video</span>
        <ul>
            <li>
                <a href="?act=video"><div class="year" <?php if(isset($_REQUEST['year']) && $_REQUEST['year']=='2014') echo 'style="background-color: rgb(22, 193, 243); color: rgb(255, 255, 255);"';?>>Video</div></a>
            </li>
        </ul>
    </div>
<?php
if(isset($_REQUEST['year']) && $_REQUEST['year'] == 2017)
    require 'php-templates/media-2017.php';
elseif(isset($_REQUEST['year']) && $_REQUEST['year'] == 2016)
require 'php-templates/media-2016.php';
elseif(isset($_REQUEST['year']) && $_REQUEST['year'] == 2015)
    require 'php-templates/media-2015.php';
elseif(isset($_REQUEST['year']) && $_REQUEST['year'] == 2014)
    require 'php-templates/media-2014.php';
elseif(isset($_REQUEST['act']) && $_REQUEST['act'] == 'video')
    require 'php-templates/video.php';
else
    require 'php-templates/media-2016.php';
?>

<script>
    function getMonth(yr){
        var month = $( "#"+yr ).val();
        window.location.href = "?year="+yr+"&month="+month;
    }
</script>

<script>
    angular
        .module("ngApp", [])
        .controller("ngCtrl", function($scope, $http){
            $scope.additionalNews = function(month, year){
                $("#"+month+"pop").toggle();
            }
            $scope.minus = function(month, year){
                $("#"+month+"pop").hide();
                $("#"+month+"2016 .glyphicon-chevron-right").show();
                $("#"+month+"2016 .glyphicon-chevron-down").hide();
            }
        });
</script>

<?php require 'php-templates/footer.php' ?>