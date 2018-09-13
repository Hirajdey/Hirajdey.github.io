<?php
require 'config/db.php';
require 'admin/config/config.php';

if(isset($_REQUEST['btnadd']) && $_REQUEST['btnadd']){
    /*
    echo "INSERT INTO disease_test (disease_name, code, test_name, method, tat, preferred_sample_type, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', '".$_POST['test']."', '".$_POST['method']."', '".$_POST['tat']."', '".$_POST['preferred_sample_type']."', NOW())";
    exit;*/
    $insert = $conn->query("INSERT INTO gene_list (disease_test_id, gene_name, created_date) VALUES ('".$_POST['code']."', '".$_POST['gene_name']."', NOW())");
    //$insert = $conn->query("INSERT INTO disease_test (disease_name, code, test_name, method, tat, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', '".$_POST['test']."', '".$_POST['method']."', '".$_POST['tat']."', NOW())");
    header("Location:?act=genelist&sub=list");
} if(isset($_REQUEST['btnedit']) && $_REQUEST['btnedit']) {
    //echo "UPDATE disease_test SET disease_name = '".$_POST['disease']."', code = '".$_POST['code']."', test_name = '".trim($_POST['test'])."', method = '".$_POST['method']."', tat = '".$_POST['tat']."', preferred_sample_type = '".$_POST['preferred_sample_type']."' WHERE id =  '".$_REQUEST['id']."'"; exit;
    $conn->query("UPDATE gene_list SET disease_test_id = '".$_POST['code']."', gene_name = '".$_POST['gene_name']."' WHERE id =  '".$_REQUEST['id']."'");
    header("Location:?act=genelist&sub=list");
}
else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'edit') {
$edit = $conn->query("SELECT * FROM gene_list WHERE id = '".$_REQUEST['id']."'");
    $row = $edit->fetch_assoc();
    $_POST['code'] = $row['disease_test_id'];
    $_POST['gene_name'] = $row['gene_name'];
} else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=genelist&sub=list");
}
if(isset($_REQUEST['btncancel']) && $_REQUEST['btncancel']){
    header("Location:?act=genelist&sub=list");
}
?>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<!--<script src="admin/js/tinymce.min.js"></script>-->
<script>tinymce.init({ selector:'textarea' });</script>
<script src="admin/js/angular-sanitize.js"></script>

<?php if(in_array($genelist, explode(',', $_SESSION['role']))) {?>
<div class="container-fluid">
    <h2>Gene List</h2>
    <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] != "add" && $_REQUEST['sub'] != "edit") {?><div class="text-right"><a href="?act=genelist&sub=add"><h3>Add</h3></a></div> <br><?php } ?>
    <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] == "list") {?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info">
                <th>#</th>
                <th>Disease</th>
                <th>Code</th>
                <th>Test</th>
                <th>Gene List</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $genelist = $conn->query("SELECT gl.id, gl.gene_name, dt.disease_category_id, dt.code, dt.test_name, dt.tat FROM gene_list as gl JOIN disease_test as dt ON gl.disease_test_id = dt.id");
            $i = 1;
            if($genelist->num_rows > 0) {
                while ($row = $genelist->fetch_assoc()) { ?>
                    <tr class="resultrows">
                        <td><?php echo $i;?>.</td>
                        <td><?php echo $row['disease_category_id'];?></td>
                        <td><?php echo $row['code'];?></td>
                        <td><?php echo $row['test_name'];?></td>
                        <td><?php echo $row['gene_name'];?></td>
                        <td><a href="?act=genelist&sub=edit&id=<?php echo $row['id'];?>">edit</a><!--/<a href="?act=genelist&sub=delete&id=<?php /*echo $row['id'];*/?>">delete</a>--></td>
                    </tr>
            <?php $i++; } } else { ?>
            <tr>
                <td colspan="6" class="text-danger text-center">No Records</td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <?php } elseif((isset($_REQUEST['sub']) && $_REQUEST['sub'] == "add") || (isset($_REQUEST['sub']) && $_REQUEST['sub'] == "edit")){
    $code = $conn->query("SELECT * FROM disease_test");
        ?>
        <form method="post">
        <div class="col-md-12">
            <select name="code" class="form-control input-md">
                <option>-- Select Code --</option>
                <?php
                if($code->num_rows > 0) {
                    while ($row = $code->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id'];?>" <?php if(isset($_POST['code']) && $_POST['code'] == $row['id']) echo "selected";?>><?php echo $row['code'];?></option>
                <?php  }
                }
                ?>
            </select> <br>
            <textarea name="gene_name"><?php if(isset($_POST['gene_name'])) echo $_POST['gene_name']?></textarea> <br>
            <input type="submit" value="Submit" name="<?php if($_REQUEST['sub'] == 'edit') echo 'btnedit'; else echo 'btnadd';?>" class="btn btn-info text-center"> <input type="submit" value="Cancel" name="btncancel" class="btn btn-info text-center"> <br> <br>
        </div>
        </form>
    <?php } ?>
</div>
<?php } else { ?>
    <div class="container-fluid permission">
        <div class="row">
            <div class="col-md-24 well text-center text-danger lead">No permission to view this page, <a href="<?php echo $site_path;?>/admin.php">click here to login</a></div>
        </div>
    </div>
<?php } ?>

<script>
    var disease_app = angular.module("diseaseApp", []);
    disease_app.controller("diseaseCtrl", function ($scope) {
        alert("test");
    });
</script>
