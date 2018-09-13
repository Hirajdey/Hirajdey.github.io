<?php
require 'config/db.php';
require 'admin/config/config.php';

if(isset($_REQUEST['btnadd']) && $_REQUEST['btnadd']){
    /*echo "INSERT INTO cme_agenda (title, left_title, start_date, venue, content, image, url, event_type, country, status, created_date) VALUES ('".$_POST['title']."', '".$_POST['left_title']."', '".$_POST['start_date']."', '".$_POST['venue']."', '".$_POST['content']."', '".$_POST['image']."', '".$_POST['url']."', '".$_POST['event_type']."', '".$_POST['country']."', 1, NOW())";
    exit;*/
    $insert = $conn->query("INSERT INTO cme_agenda (cme_id, topic, speaker, start_time, end_time, created_date) VALUES ('".$_POST['cme_id']."', '".$_POST['topic']."', '".$_POST['speaker']."', '".$_POST['start_time']."', '".$_POST['end_time']."', NOW())");
    //$insert = $conn->query("INSERT INTO disease_test (disease_name, code, test_name, method, tat, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', '".$_POST['test']."', '".$_POST['method']."', '".$_POST['tat']."', NOW())");
    header("Location:?act=cme_agenda&sub=list");
}
elseif(isset($_REQUEST['btnedit']) && $_REQUEST['btnedit']) {
    //echo "UPDATE disease_test SET disease_name = '".$_POST['disease']."', code = '".$_POST['code']."', test_name = '".trim($_POST['test'])."', method = '".$_POST['method']."', tat = '".$_POST['tat']."', preferred_sample_type = '".$_POST['preferred_sample_type']."' WHERE id =  '".$_REQUEST['id']."'"; exit;
    $conn->query("UPDATE cme_agenda SET cme_id = '".$_POST['cme_id']."', topic = '".$_POST['topic']."', speaker = '".$_POST['speaker']."', start_time = '".$_POST['start_time']."', end_time = '".$_POST['end_time']."'  WHERE id =  '".$_REQUEST['id']."'");
    header("Location:?act=cme_agenda&sub=list");
}elseif(isset($_REQUEST['btncancel']) && $_REQUEST['btncancel']){
    header("Location:?act=cme_agenda&sub=list");
}elseif(isset($_REQUEST['btndelete']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM cme_agenda WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=cme_agenda&sub=list");
}

if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'edit') {
    $edit = $conn->query("SELECT * FROM cme_agenda WHERE id = '".$_REQUEST['id']."'");
    $row = $edit->fetch_assoc();
    $_POST['cme_id'] = $row['cme_id'];
    $_POST['topic'] = $row['topic'];
    $_POST['speaker'] = $row['speaker'];
    $_POST['start_time'] = $row['start_time'];
    $_POST['end_time'] = $row['end_time'];
}/*else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM cme_agenda_download_users WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=cme_agenda&sub=list");
}*/
?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<!--<script src="admin/js/tinymce.min.js"></script>-->
<script>tinymce.init({ selector:'textarea' });</script>

<?php if(in_array(trim($role), explode(',', $_SESSION['role']))) {?>
<div class="container-fluid">
    <br>
    <h2>CME Agenda</h2><div class="row">
        <?php /*if($_SESSION['username'] == "sumit.s@medgenome.com" && $_SESSION['username'] == "hiranjith.gh@medgenome.com"){*/?><!--<div class="col-md-2 pull-right"><a href="logout.php">Logout</a></div>--><?php /*} */?>
        <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] != "add" && $_REQUEST['sub'] != "edit") {?><div class="text-right"><a href="?act=cme_agenda&sub=add"><h3>Add</h3></a></div> <br><?php } ?>
    </div>
    <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] == "list") {?>
        <?php $leads = $conn->query("SELECT cm.title AS title, ca.id AS id, ca.topic AS topic, ca.speaker AS speaker, ca.start_time AS start_time, ca.end_time AS end_time FROM cme_agenda AS ca LEFT JOIN cme AS cm ON cm.id = ca.cme_id ORDER BY ca.id DESC");
        if(isset($leads->num_rows) && $leads->num_rows > 0){
        ?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info">
                <th>#</th>
                <th>CME Title</th>
                <th>Topic</th>
                <th>Speaker</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php ;
            $i = 1;

            while($row = $leads->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $i;?>.</td>
                <td><?php echo $row['title'];?></td>
                <td><?php echo $row['topic'];?></td>
                <td><?php echo $row['speaker'];?></td>
                <td><?php echo $row['start_time']. " - ". $row['end_time'];?></td>
                <td><a href="?act=cme_agenda&sub=edit&id=<?php echo $row['id'];?>">Edit</a> / <a href="?act=cme_agenda&sub=delete&id=<?php echo $row['id'];?>">Delete</a></td>
            </tr>
            <?php $i++; }  ?>
            </tbody>
        </table>
    </div>
    <?php } else {?>
    <div class="row">
        <div class="well text-center text-danger lead">No Records</div>
    </div>
    <?php } ?>
    <?php } elseif((isset($_REQUEST['sub']) && $_REQUEST['sub'] == "add") || (isset($_REQUEST['sub']) && $_REQUEST['sub'] == "edit")){
        ?>
        <br>
        <form class="form-horizontal" method="post">

            <div class="form-group">
                <div class="col-md-12"><select name="cme_id" class="form-control input-md">
                    <option>-- Select CME title --</option>
                    <?php
                    $cme_title = $conn->query("SELECT * FROM cme");
                    if($cme_title->num_rows > 0) {
                        while ($row = $cme_title->fetch_assoc()) { ?>
                            <option value="<?php echo $row['id'];?>" <?php if(isset($_POST['cme_id']) && $_POST['cme_id'] == $row['cme_id']) echo "selected";?>><?php echo $row['title'];?></option>
                        <?php  }
                    }
                    ?>
                </select></div>
            </div>

            <div class="form-group">
                <div class="col-md-12"><input placeholder="Topic" type="text" name="topic" class="form-control input-md" value="<?php if(isset($_POST['topic'])) echo $_POST['topic'];?>"></div>
            </div>

            <div class="form-group">
                <div class="col-md-12"><input placeholder="Speaker" type="text" name="speaker" class="form-control input-md" value="<?php if(isset($_POST['speaker'])) echo $_POST['speaker'];?>"></div>
            </div>

            <div class="form-group">
                <div class="col-md-12"><input placeholder="Start Time ex:(hh-mm-ss)" type="text" name="start_time" class="form-control input-md" value="<?php if(isset($_POST['start_time'])) echo $_POST['start_time'];?>"></div>
            </div>

            <div class="form-group">
                <div class="col-md-12"><input placeholder="End Time ex:(hh-mm-ss)" type="text" name="end_time" class="form-control input-md" value="<?php if(isset($_POST['end_time'])) echo $_POST['end_time'];?>"></div>
            </div>

            <div class="form-group">
                <div class="col-md-12"><input type="submit" value="Submit" name="<?php if((isset($_REQUEST['sub']) && $_REQUEST['sub'] == "add")) echo 'btnadd'; elseif((isset($_REQUEST['sub']) && $_REQUEST['sub'] == "edit")) echo 'btnedit';?>" class="btn btn-info text-center"> <input type="submit" value="Cancel" name="btncancel" class="btn btn-info text-center"></div>
            </div>
        </form>

    <?php } elseif((isset($_REQUEST['sub']) && $_REQUEST['sub'] == "add") || (isset($_REQUEST['sub']) && $_REQUEST['sub'] == "delete")){ ?>
        <form method="post">
            <div class="col-md-12"><b>Are you sure want to delete?</b> <br></div>
            <div class="col-md-12"><input type="submit" value="OK" name="btndelete" class="btn btn-info text-center"> <input type="submit" value="Cancel" name="btncancel" class="btn btn-info text-center"> <br> <br></div>
        </form>
    <?php } ?>
</div>
<?php } else {?>
    <div class="container-fluid permission">
        <div class="row">
            <div class="col-md-24 well text-center text-danger lead">No permission to view this page, <a href="<?php echo $site_path;?>/admin.php">click here to login</a></div>
        </div>
    </div>
<?php } ?>
