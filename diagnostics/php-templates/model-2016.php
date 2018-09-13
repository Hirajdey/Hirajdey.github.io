<!-- Modal -->
<div class="modal fade" id="april27" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p><img src="img/press/2016/The_Times_of_India_-Bhopal_Pg-no.03_26.04.2016_.jpg"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
$id = ["aprilaims1","aprilaims2"];
$image = ["AIIMS_Bhopal_1.jpg","AIIMS_Bhopal_2.jpg"];
for($j=0; $j<count($id); $j++){
?>
<div class="modal fade" id="<?php echo $id[$j];?>" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p><img src="img/press/2016/<?php echo $image[$j];?>"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>
