<?php
require 'config/db.php';
require 'admin/config/config.php';

if(isset($_REQUEST['btnadd']) && $_REQUEST['btnadd']){
    $_POST['end_date'] = ($_POST['end_date']=="") ? "NULL" : $_POST['end_date'];
    /*echo "INSERT INTO media_news (title, left_title, start_date, venue, content, image, url, event_type, country, status, created_date) VALUES ('".$_POST['title']."', '".$_POST['left_title']."', '".$_POST['start_date']."', '".$_POST['venue']."', '".$_POST['content']."', '".$_POST['image']."', '".$_POST['url']."', '".$_POST['event_type']."', '".$_POST['country']."', 1, NOW())";
    exit;*/
    $insert = $conn->query("INSERT INTO videos_subnews (title_news_id, image, pdf, url, created_date) VALUES ('".$_POST['title']."', '".$_POST['image']."', '".$_POST['pdf']."', '".$_POST['url']."', NOW())");
    //$insert = $conn->query("INSERT INTO disease_test (disease_name, code, test_name, method, tat, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', '".$_POST['test']."', '".$_POST['method']."', '".$_POST['tat']."', NOW())");
    header("Location:?act=videos_sub_news&sub=list");
}
elseif(isset($_REQUEST['btnedit']) && $_REQUEST['btnedit']) {
    $_POST['end_date'] = ($_POST['end_date']=="") ? "NULL" : $_POST['end_date'];
    //echo "UPDATE disease_test SET disease_name = '".$_POST['disease']."', code = '".$_POST['code']."', test_name = '".trim($_POST['test'])."', method = '".$_POST['method']."', tat = '".$_POST['tat']."', preferred_sample_type = '".$_POST['preferred_sample_type']."' WHERE id =  '".$_REQUEST['id']."'"; exit;
    $conn->query("UPDATE videos_subnews SET title_news_id = '".$_POST['title']."', image = '".$_POST['image']."', pdf = '".$_POST['pdf']."', url = '".$_POST['url']."' WHERE id =  '".$_REQUEST['id']."'");
    header("Location:?act=videos_sub_news&sub=list");
}elseif(isset($_REQUEST['btncancel']) && $_REQUEST['btncancel']){
    header("Location:?act=videos_sub_news&sub=list");
}elseif(isset($_REQUEST['btndelete']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM videos_subnews WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=videos_sub_news&sub=list");
}

if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'edit') {
    $edit = $conn->query("SELECT mn.id AS id, ms.image AS image, ms.pdf AS pdf, ms.url AS url FROM videos_subnews AS ms JOIN videos_news AS mn ON mn.id = ms.title_news_id WHERE ms.id = '".$_REQUEST['id']."'");
    $row = $edit->fetch_assoc();
    $_POST['title'] = $row['id'];
    $_POST['image'] = $row['image'];
    $_POST['pdf'] = $row['pdf'];
    $_POST['url'] = $row['url'];

}/*else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM videos_subnews_download_users WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=videos_sub_news&sub=list");
}*/
?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<!--<script src="admin/js/tinymce.min.js"></script>-->
<script>tinymce.init({ selector:'textarea' });</script>

<?php if(in_array($role, explode(',', $_SESSION['role']))) {?>
<div class="container-fluid">
    <br>
    <h2>Videos Sub News</h2><div class="row">
        <?php /*if($_SESSION['username'] == "sumit.s@medgenome.com" && $_SESSION['username'] == "hiranjith.gh@medgenome.com"){*/?><!--<div class="col-md-2 pull-right"><a href="logout.php">Logout</a></div>--><?php /*} */?>
        <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] != "add" && $_REQUEST['sub'] != "edit") {?><div class="text-right"><a href="?act=videos_sub_news&sub=add"><h3>Add</h3></a></div> <br><?php } ?>
    </div>
    <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] == "list") {?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info">
                <th>#</th>
                <th width="40%">Title</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $leads = $conn->query("SELECT ms.id AS id, ms.image AS image, ms.pdf AS pdf, ms.url AS url, mn.title AS title, YEAR (mn.news_date) AS year FROM videos_subnews AS ms JOIN videos_news AS mn ON mn.id = ms.title_news_id ORDER BY ms.id DESC");
            $i = 1;
            while($row = $leads->fetch_assoc()) {?>
            <tr>
                <td><?php echo $i;?>.</td>
                <td><?php echo $row['title'];?></td>
                <td><a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['url'];?></a></td>
                <td><a href="?act=videos_sub_news&sub=edit&id=<?php echo $row['id'];?>">Edit</a> / <a href="?act=videos_sub_news&sub=delete&id=<?php echo $row['id'];?>">Delete</a></td>
            </tr>
            <?php $i++; } ?>
            </tbody>
        </table>
    </div>
    <?php } elseif((isset($_REQUEST['sub']) && $_REQUEST['sub'] == "add") || (isset($_REQUEST['sub']) && $_REQUEST['sub'] == "edit")){
        $code = $conn->query("SELECT * FROM videos_news");
        ?>
        <br>
        <form class="form-horizontal" method="post">

            <div class="form-group">
                <div class="col-md-12">
                    <select name="title" class="form-control input-md">
                        <option>-- Select Videos Title --</option>
                        <?php
                        if($code->num_rows > 0) {
                            while ($row = $code->fetch_assoc()) { ?>
                                <option value="<?php echo $row['id'];?>" <?php if(isset($_POST['title']) && $_POST['title'] == $row['id']) echo "selected";?>><?php echo $row['title'];?></option>
                            <?php  }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <!--<div class="form-group">
                <img src="img/press/2016/<?php /*echo $_POST['image'];*/?>" width="250px" height="50">
                <div class="col-md-12"><input placeholder="Image Name" type="text" name="image" class="form-control input-md" value="<?php /*if(isset($_POST['image'])) echo $_POST['image'];*/?>"></div>
            </div>

            <div class="form-group">
                <div class="col-md-12"><input placeholder="PDF Name" type="text" name="pdf" class="form-control input-md" value="<?php /*if(isset($_POST['pdf'])) echo $_POST['pdf'];*/?>"></div>
            </div>-->

            <div class="form-group">
                <div class="col-md-12"><input placeholder="URL Name" type="text" name="url" class="form-control input-md" value="<?php if(isset($_POST['url'])) echo $_POST['url'];?>"></div>
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
