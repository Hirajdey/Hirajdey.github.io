<?php
require 'config/db.php';
require 'admin/config/config.php';

if(isset($_REQUEST['btnadd']) && $_REQUEST['btnadd']){
   /* error_reporting(E_ALL);
    ini_set('display_errors', 1);*/
    /*print_r($_POST);*/
    //print_r($_FILES);

    $name     = $_FILES['videoName']['name'];
    $tmpName  = $_FILES['videoName']['tmp_name'];
    $error    = $_FILES['videoName']['error'];
    $size     = $_FILES['videoName']['size'];
    $type     = $_FILES['videoName']['type'];
    $ext      = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    if($size <= 90000000 && $ext == "mp4") {
        $targetPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'videos' . DIRECTORY_SEPARATOR . $name;
        move_uploaded_file($tmpName, $targetPath);

        /*echo "INSERT INTO videos (title, news_date, country, status, created_date) VALUES ('".$_POST['title']."', '".$_POST['news_date']."', '".$_POST['country']."', 1, NOW())";
        exit;*/
        $insert = $conn->query("INSERT INTO videos (title, name, created_date) VALUES ('" . $_POST['title'] . "', '" . $name . "', NOW())");
        //$insert = $conn->query("INSERT INTO disease_test (disease_name, code, test_name, method, tat, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', '".$_POST['test']."', '".$_POST['method']."', '".$_POST['tat']."', NOW())");
        header("Location:?act=videos&sub=list&success=1");
    } else{
        header("Location:?act=videos&sub=list&error=1");
        //echo "File size / video format is incorrect";exit;
    }
}
elseif(isset($_REQUEST['btnedit']) && $_REQUEST['btnedit']) {
    //echo $_POST['previousFile']; exit;
    $targetFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'videos' . DIRECTORY_SEPARATOR . $_POST['previousFile'];
    unlink($targetFile);

    $name     = $_FILES['videoName']['name'];
    $tmpName  = $_FILES['videoName']['tmp_name'];
    $error    = $_FILES['videoName']['error'];
    $size     = $_FILES['videoName']['size'];
    $type     = $_FILES['videoName']['type'];
    $ext      = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    if($size <= 90000000 && $ext == "mp4") {
        $targetPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'videos' . DIRECTORY_SEPARATOR . $name;
        move_uploaded_file($tmpName, $targetPath);

        //echo "UPDATE disease_test SET disease_name = '".$_POST['disease']."', code = '".$_POST['code']."', test_name = '".trim($_POST['test'])."', method = '".$_POST['method']."', tat = '".$_POST['tat']."', preferred_sample_type = '".$_POST['preferred_sample_type']."' WHERE id =  '".$_REQUEST['id']."'"; exit;
        $conn->query("UPDATE videos SET title = '".$_POST['title']."', name = '".$name."' WHERE id =  '".$_REQUEST['id']."'");
        header("Location:?act=videos&sub=list");
    } else{
        header("Location:?act=videos&sub=list&error=1");
    }
}elseif(isset($_REQUEST['btncancel']) && $_REQUEST['btncancel']){
    header("Location:?act=videos&sub=list");
}elseif(isset($_REQUEST['btndelete']) && $_REQUEST['sub'] == 'delete'){ echo "Delete Record ID: ". $_REQUEST['id'];
    //echo "SELECT * FROM videos WHERE id = '".$_REQUEST['id']."'";
    $remove_file = $conn->query("SELECT * FROM videos WHERE id = '".$_REQUEST['id']."'");
    $row = $remove_file->fetch_assoc();

    $targetFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'videos' . DIRECTORY_SEPARATOR . $row['name'];
    unlink($targetFile);

    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM videos WHERE id = '".$_REQUEST['id']."' LIMIT 1");

    header("Location:?act=videos&sub=list");
}
// Delete records
if(isset($_REQUEST['id']) && ($_REQUEST['sub'] == 'edit' || $_REQUEST['sub'] == 'delete')) {
    $edit = $conn->query("SELECT * FROM videos WHERE id = '".$_REQUEST['id']."'");
    $row = $edit->fetch_assoc();
    $_POST['title'] = $row['title'];
    $_POST['name'] = $row['name'];

}/*else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM videos_download_users WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=videos&sub=list");
}*/
?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<!--<script src="admin/js/tinymce.min.js"></script>-->
<script>tinymce.init({ selector:'textarea' });</script>

<?php if(in_array($role, explode(',', $_SESSION['role']))) {?>
<div class="container-fluid">
    <br>

    <!-- Alert Section-->
    <?php if(isset($_REQUEST['error']) && $_REQUEST['error'] == 1){?>
    <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        File size / Video format is incorrect
    </div>
    <?php } ?>

    <?php if(isset($_REQUEST['success']) && $_REQUEST['success'] == 1){?>
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Your video has uploaded successfully
        </div>
    <?php } ?>

    <!-- End -->


    <div class="row">
        <div class="col-md-12 text-left"><h2>Videos</h2></div>
        <div class="col-md-12 text-right"><a href="logout.php"><p><span class="glyphicon glyphicon-off"></span> Logout </p></a></div>
    </div>
    <!-- Delete Section -->
    <?php if((isset($_REQUEST['sub']) && $_REQUEST['sub'] == "add") || (isset($_REQUEST['sub']) && $_REQUEST['sub'] == "delete")){ ?>
        <form method="post" enctype="multipart/form-data">
            <div class="col-md-12">Are you sure want to delete <b><?php if(isset($_POST['name'])) echo $_POST['name'];?></b>? <br></div>
            <div class="col-md-12"><input type="submit" value="OK" name="btndelete" class="btn btn-info text-center"> <input type="submit" value="Cancel" name="btncancel" class="btn btn-info text-center"> <br> <br></div>
        </form>
    <?php } ?>
    <!-- End Delete Section -->

    <!-- Edit Section -->
    <?php $code = $conn->query("SELECT * FROM disease_test");
    $submit_button = ($_REQUEST['sub'] == 'edit') ? "btnedit" : "btnadd";
    if($_REQUEST['sub'] == 'edit')
    ?>
    <br>
    <?php if((isset($_REQUEST['sub']) && $_REQUEST['sub'] != "delete")){ ?>
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <input type="hidden" name="previousFile" value="<?php echo $_POST['name'];?>">
        <div class="form-group">
            <div class="col-md-12"><input required placeholder="Title" type="text" name="title" class="form-control input-md" value="<?php if(isset($_POST['title'])) echo $_POST['title'];?>"></div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <b><?php if(isset($_POST['name'])) echo $_POST['name'];?></b> <br>
                <?php if(isset($_POST['name'])){ ?>
                    <video width="320" height="240" controls>
                        <source src="<?php echo $site_path;?>/admin/videos/<?php echo $_POST['name'];?>" type="video/mp4">
                    </video>
                <?php }?>

                <input type="file" name="videoName" id="videoName"></div>
        </div>

        <div class="form-group">
            <div class="col-md-12"><input type="submit" value="Submit" name="<?php echo $submit_button;?>" class="btn btn-info text-center"> <input type="submit" value="Cancel" name="btncancel" class="btn btn-info text-center"></div>
        </div>
    </form>
    <?php } ?>
    <div class="row">
        <?php /*if($_SESSION['username'] == "sumit.s@medgenome.com" && $_SESSION['username'] == "hiranjith.gh@medgenome.com"){*/?><!--<div class="col-md-2 pull-right"><a href="logout.php">Logout</a></div>--><?php /*} */?>
        <?php /*if(isset($_REQUEST['sub']) && $_REQUEST['sub'] != "add" && $_REQUEST['sub'] != "edit") {*/?><!--<div class="text-right"><a href="?act=videos&sub=add"><h3>Add</h3></a></div> <br>--><?php /*} */?>
    </div>

    <?php
    $leads = $conn->query("SELECT * FROM videos ORDER BY id DESC");
    if($leads->num_rows != 0){
    ?>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info">
                <th>#</th>
                <th width="40%">Title</th>
                <th>Video</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            while($row = $leads->fetch_assoc()) {?>
            <tr>
                <td><?php echo $i;?>.</td>
                <td><?php echo $row['title'];?></td>
                <td>
                    <video width="320" height="240" controls>
                        <source src="<?php echo $site_path;?>/admin/videos/<?php echo $row['name'];?>" type="video/mp4">
                        <!--<source src="mov_bbb.ogg" type="video/ogg">-->
                    </video>
                </td>
                <td><a href="?act=videos&sub=edit&id=<?php echo $row['id'];?>">Edit</a> / <a href="?act=videos&sub=delete&id=<?php echo $row['id'];?>">Delete</a></td>
            </tr>
            <?php $i++; } ?>
            </tbody>
        </table>
    </div>
    <?php } else {?>
    <div class="alert alert-danger alert-dismissable text-center lead">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        No records are available
    </div>
    <?php } ?>
</div>
<?php } else {?>
    <div class="container-fluid permission">
        <div class="row">
            <div class="col-md-24 well text-center text-danger lead">No permission to view this page, <a href="<?php echo $site_path;?>/admin/">click here to login</a></div>
        </div>
    </div>
<?php } ?>
