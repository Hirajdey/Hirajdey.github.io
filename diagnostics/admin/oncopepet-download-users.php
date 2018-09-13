<?php
require 'config/db.php';
require 'admin/config/config.php';

if(isset($_REQUEST['btnedit']) && $_REQUEST['btnedit']) {
    //echo "UPDATE disease_test SET disease_name = '".$_POST['disease']."', code = '".$_POST['code']."', test_name = '".trim($_POST['test'])."', method = '".$_POST['method']."', tat = '".$_POST['tat']."', preferred_sample_type = '".$_POST['preferred_sample_type']."' WHERE id =  '".$_REQUEST['id']."'"; exit;
    $conn->query("UPDATE oncopept_download_users SET name = '".$_POST['name']."', email = '".$_POST['email']."', organization = '".$_POST['organization']."', designation = '".$_POST['designation']."' WHERE id =  '".$_REQUEST['id']."'");
    header("Location:?act=oncopept&sub=list");
}elseif(isset($_REQUEST['btncancel']) && $_REQUEST['btncancel']){
    header("Location:?act=oncopept&sub=list");
}elseif(isset($_REQUEST['btndelete']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM oncopept_download_users WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=oncopept&sub=list");
}

if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'edit') {
    $edit = $conn->query("SELECT * FROM oncopept_download_users WHERE id = '".$_REQUEST['id']."'");
    $row = $edit->fetch_assoc();
    $_POST['name'] = $row['name'];
    $_POST['email'] = $row['email'];
    $_POST['organization'] = $row['organization'];
    $_POST['designation'] = $row['designation'];
}/*else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM oncopept_download_users WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=oncopept&sub=list");
}*/
?>

<?php if(in_array($oncopept, explode(',', $_SESSION['role']))) {?>
<div class="container-fluid">
    <br>
    <h2>Oncopept download users</h2><div class="row"><div class="col-md-2 pull-right"><a href="logout.php">Logout</a></div></div>
    <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] == "list") {?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info">
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Organization</th>
                <th>Designation</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $leads = $conn->query("SELECT * FROM oncopept_download_users ORDER BY id DESC");
            $i = 1;
            while($row = $leads->fetch_assoc()) {?>
            <tr>
                <td><?php echo $i;?>.</td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['organization'];?></td>
                <td><?php echo $row['designation'];?></td>
                <td><a href="?act=oncopept&sub=edit&id=<?php echo $row['id'];?>">Edit</a> / <a href="?act=oncopept&sub=delete&id=<?php echo $row['id'];?>">Delete</a></td>
            </tr>
            <?php $i++; } ?>
            </tbody>
        </table>
    </div>
    <?php } elseif((isset($_REQUEST['sub']) && $_REQUEST['sub'] == "add") || (isset($_REQUEST['sub']) && $_REQUEST['sub'] == "edit")){
        $code = $conn->query("SELECT * FROM disease_test");
        ?>
        <form method="post">
            <div class="col-md-12"><input type="text" name="name" class="form-control input-md" value="<?php echo $_POST['name'];?>"> <br></div>
            <div class="col-md-12"><input type="text" name="email" class="form-control input-md" value="<?php echo $_POST['email'];?>"> <br></div>
            <div class="col-md-12"><input type="text" name="organization" class="form-control input-md" value="<?php echo $_POST['organization'];?>"> <br></div>
            <div class="col-md-12"><input type="text" name="designation" class="form-control input-md" value="<?php echo $_POST['designation'];?>"> <br></div>
            <div class="col-md-12"><input type="submit" value="Submit" name="btnedit" class="btn btn-info text-center"> <input type="submit" value="Cancel" name="btncancel" class="btn btn-info text-center"> <br> <br></div>
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
