<?php
require 'config/db.php';
require 'admin/config/config.php';

if(isset($_REQUEST['btnadd']) && $_REQUEST['btnadd']){
    $_POST['end_date'] = ($_POST['end_date']=="") ? "NULL" : $_POST['end_date'];
    /*echo "INSERT INTO events (title, left_title, start_date, venue, content, image, url, event_type, country, status, created_date) VALUES ('".$_POST['title']."', '".$_POST['left_title']."', '".$_POST['start_date']."', '".$_POST['venue']."', '".$_POST['content']."', '".$_POST['image']."', '".$_POST['url']."', '".$_POST['event_type']."', '".$_POST['country']."', 1, NOW())";
    exit;*/
    $insert = $conn->query("INSERT INTO events (title, left_title, start_date, end_date, venue, content, image1, image2, image3, url, event_type, country, status, created_date) VALUES ('".$_POST['title']."', '".$_POST['left_title']."', '".$_POST['start_date']."', '".$_POST['end_date']."', '".$_POST['venue']."', '".$_POST['content']."', '".$_POST['image1']."', '".$_POST['image2']."', '".$_POST['image3']."', '".$_POST['url']."', '".$_POST['event_type']."', '".$_POST['country']."', 1, NOW())");
    //$insert = $conn->query("INSERT INTO disease_test (disease_name, code, test_name, method, tat, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', '".$_POST['test']."', '".$_POST['method']."', '".$_POST['tat']."', NOW())");
    header("Location:?act=events&sub=list");
}
elseif(isset($_REQUEST['btnedit']) && $_REQUEST['btnedit']) {
    $_POST['end_date'] = ($_POST['end_date']=="") ? "NULL" : $_POST['end_date'];
    //echo "UPDATE disease_test SET disease_name = '".$_POST['disease']."', code = '".$_POST['code']."', test_name = '".trim($_POST['test'])."', method = '".$_POST['method']."', tat = '".$_POST['tat']."', preferred_sample_type = '".$_POST['preferred_sample_type']."' WHERE id =  '".$_REQUEST['id']."'"; exit;
    $conn->query("UPDATE events SET title = '".$_POST['title']."', left_title = '".$_POST['left_title']."', start_date = '".$_POST['start_date']."', end_date = '".$_POST['end_date']."', venue = '".$_POST['venue']."', content = '".addslashes($_POST['content'])."', image1 = '".$_POST['image1']."', image2 = '".$_POST['image2']."', image3 = '".$_POST['image3']."', url = '".$_POST['url']."', event_type = '".$_POST['event_type']."', country = '".$_POST['country']."'  WHERE id =  '".$_REQUEST['id']."'");
    header("Location:?act=events&sub=list");
}elseif(isset($_REQUEST['btncancel']) && $_REQUEST['btncancel']){
    header("Location:?act=events&sub=list");
}elseif(isset($_REQUEST['btndelete']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM events WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=events&sub=list");
}

if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'edit') {
    $edit = $conn->query("SELECT * FROM events WHERE id = '".$_REQUEST['id']."'");
    $row = $edit->fetch_assoc();
    $_POST['title'] = $row['title'];
    $_POST['left_title'] = $row['left_title'];
    $_POST['start_date'] = $row['start_date'];
    $_POST['end_date'] = $row['end_date'];
    $_POST['venue'] = $row['venue'];
    $_POST['content'] = $row['content'];
    $_POST['image1'] = $row['image1'];
    $_POST['image2'] = $row['image2'];
    $_POST['image3'] = $row['image3'];
    $_POST['url'] = $row['url'];
    $_POST['event_type'] = $row['event_type'];
    $_POST['country'] = $row['country'];

}/*else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM events_download_users WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=events&sub=list");
}*/
?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<!--<script src="admin/js/tinymce.min.js"></script>-->
<script>tinymce.init({ selector:'textarea' });</script>

<?php if(in_array($role, explode(',', $_SESSION['role']))) {?>
<div class="container-fluid">
    <br>
    <h2>Events</h2><div class="row">
        <?php /*if($_SESSION['username'] == "sumit.s@medgenome.com" && $_SESSION['username'] == "hiranjith.gh@medgenome.com"){*/?><!--<div class="col-md-2 pull-right"><a href="logout.php">Logout</a></div>--><?php /*} */?>
        <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] != "add" && $_REQUEST['sub'] != "edit") {?><div class="text-right"><a href="?act=events&sub=add"><h3>Add</h3></a></div> <br><?php } ?>
    </div>
    <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] == "list") {?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info">
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image 1</th>
                <th>Date</th>
                <th>Venue</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $leads = $conn->query("SELECT * FROM events ORDER BY id DESC");
            $i = 1;
            while($row = $leads->fetch_assoc()) {?>
            <tr>
                <td><?php echo $i;?>.</td>
                <td><?php echo $row['title'];?></td>
                <td style="text-overflow: ellipsis; overflow: auto;"><?php echo $row['content'];?></td>
                <td><?php echo $row['image1'];?></td>
                <td><?php echo $row['start_date']; if(isset($row['end_date'])) echo " to ".$row['end_date'];?></td>
                <td><?php echo $row['venue'];?></td>
                <td><a href="?act=events&sub=edit&id=<?php echo $row['id'];?>">Edit</a> / <a href="?act=events&sub=delete&id=<?php echo $row['id'];?>">Delete</a></td>
            </tr>
            <?php $i++; } ?>
            </tbody>
        </table>
    </div>
    <?php } elseif((isset($_REQUEST['sub']) && $_REQUEST['sub'] == "add") || (isset($_REQUEST['sub']) && $_REQUEST['sub'] == "edit")){
        $code = $conn->query("SELECT * FROM disease_test");
        ?>
        <br>
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <div class="col-md-12"><input placeholder="Title" type="text" name="title" class="form-control input-md" value="<?php if(isset($_POST['title'])) echo $_POST['title'];?>"></div>
            </div>
            <div class="form-group">
                <div class="col-md-12"><input placeholder="Left Title" type="text" name="left_title" class="form-control input-md" value="<?php if(isset($_POST['left_title'])) echo $_POST['left_title'];?>"></div>
            </div>
            <div class="form-group">
                <div class="col-md-12"><input placeholder="Start date ex:(yyyy-mm-dd)" type="text" name="start_date" class="form-control input-md" value="<?php if(isset($_POST['start_date'])) echo $_POST['start_date'];?>"></div>
            </div>
            <div class="form-group">
                <div class="col-md-12"><input placeholder="End date ex:(yyyy-mm-dd)" type="text" name="end_date" class="form-control input-md" value="<?php if(isset($_POST['end_date'])) echo $_POST['end_date'];?>"></div>
            </div>
            <div class="form-group">
                <div class="col-md-12"><input placeholder="Venue" type="text" name="venue" class="form-control input-md" value="<?php if(isset($_POST['venue'])) echo $_POST['venue'];?>"></div>
            </div>
            <div class="form-group">
                <div class="col-md-12"><textarea name="content" class="form-control input-md" placeholder="Content"><?php if(isset($_POST['content'])) echo $_POST['content']?></textarea></div>
            </div>
            <div class="form-group">
                <div class="col-md-12"><input placeholder="Image 1" type="text" name="image1" class="form-control input-md" value="<?php if(isset($_POST['image1'])) echo $_POST['image1'];?>"></div>
            </div>
            <div class="form-group">
                <div class="col-md-12"><input placeholder="Image 2" type="text" name="image2" class="form-control input-md" value="<?php if(isset($_POST['image2'])) echo $_POST['image2'];?>"></div>
            </div>
            <div class="form-group">
                <div class="col-md-12"><input placeholder="Image 3" type="text" name="image3" class="form-control input-md" value="<?php if(isset($_POST['image3'])) echo $_POST['image3'];?>"></div>
            </div>
            <div class="form-group">
                <div class="col-md-12"><input placeholder="URL" type="text" name="url" class="form-control input-md" value="<?php if(isset($_POST['url'])) echo $_POST['url'];?>"></div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <select name="event_type" class="form-control input-md">
                        <option>-- Select Type --</option>
                        <option value="upcoming" <?php if(isset($_POST['event_type']) && $_POST['event_type'] == "upcoming") echo "selected";?>>Upcoming</option>
                        <option value="recent" <?php if(isset($_POST['event_type']) && $_POST['event_type'] == "recent") echo "selected";?>>Recent</option>
                        <option value="past" <?php if(isset($_POST['event_type']) && $_POST['event_type'] == "past") echo "selected";?>>Past</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <select name="country" class="form-control input-md">
                        <option>-- Select Country --</option>
                        <option value="IN" <?php if(isset($_POST['country']) && $_POST['country'] == "IN") echo "selected";?>>India</option>
                        <option value="US" <?php if(isset($_POST['country']) && $_POST['country'] == "US") echo "selected";?>>US</option>
                    </select>
                </div>
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
