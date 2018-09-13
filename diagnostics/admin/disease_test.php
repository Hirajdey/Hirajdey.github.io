<?php
require 'config/db.php';
require 'admin/config/config.php';

// update from string to number for disease category
/*$disease = ['Cardiology', 'Connective Tissue Disorders and Skeletal Dysplasias', 'Dermatology', 'Endocrinology', 'ENT', 'Haematology', 'Immunology', 'Metabolic Disorders', 'Miscellaneous', 'Nephrology', 'Neurology', 'Neurology - Epilepsy', 'Neurology - Immunology', 'Neurology - leukodystrophies', 'Neurology - Movement Disorders', 'Neurology - Neuromuscular', 'Neurology - Others', 'NIPT',
'Oncology - Flowcytometry', 'Oncology - Immunohistochemistry', 'Oncology - Sequencing', 'Ophthalmology', 'PGS', 'Skeletal dysplasia'];

for($x=0; $x<count($disease); $x++){
    //echo "UPDATE disease_test SET disease_category_id = ". ($x+1) ." WHERE disease_name = '".$disease[$x]."'". "<br>";
    $conn->query("UPDATE disease_test SET disease_category_id = ". ($x+1) ." WHERE disease_name = '".$disease[$x]."'");
}
exit;*/
if(isset($_REQUEST['btnadd']) && $_REQUEST['btnadd']){

    /*echo "INSERT INTO disease_test (disease_name, code, test_name, method, tat, preferred_sample_type, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', '".$_POST['test']."', '".$_POST['method']."', '".$_POST['tat']."', '".$_POST['preferred_sample_type']."', NOW())";
    exit;*/
    $insert = $conn->query("INSERT INTO disease_test (disease_category_id, location, code, test_name, method, tat, preferred_sample_type, status, created_date) VALUES ('".$_POST['disease']."', '".$_POST['location']."', '".$_POST['code']."', '".addslashes($_POST['test'])."', '".$_POST['method']."', '".$_POST['tat']."', '".$_POST['preferred_sample_type']."', 1, NOW())");
    //$insert = $conn->query("INSERT INTO disease_test (disease_name, code, test_name, method, tat, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', '".$_POST['test']."', '".$_POST['method']."', '".$_POST['tat']."', NOW())");

    // log for insert
    //echo "INSERT INTO disease_test_log (disease_category_id, code, log_type, system_name, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', 'add', '".gethostname()."', NOW())"; exit;
    $conn->query("INSERT INTO disease_test_log (disease_category_id, code, log_type, system_name, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', 'add', '".gethostbyaddr($_SERVER['REMOTE_ADDR'])."', NOW())");

    header("Location:?act=disease&sub=list");
} if(isset($_REQUEST['btnedit']) && $_REQUEST['btnedit']) {
    //echo "UPDATE disease_test SET disease_name = '".$_POST['disease']."', code = '".$_POST['code']."', test_name = '".addslashes($_POST['test'])."', method = '".$_POST['method']."', tat = '".$_POST['tat']."', preferred_sample_type = '".$_POST['preferred_sample_type']."' WHERE id =  '".$_REQUEST['id']."'"; exit;
    $conn->query("UPDATE disease_test SET disease_category_id = '".$_POST['disease']."', location = '".$_POST['location']."', code = '".$_POST['code']."', test_name = '".addslashes($_POST['test'])."', method = '".$_POST['method']."', tat = '".$_POST['tat']."', preferred_sample_type = '".$_POST['preferred_sample_type']."', status = '".$_POST['status']."' WHERE id =  '".$_REQUEST['id']."'");

    // log for edit
    //echo "INSERT INTO disease_test_log (disease_category_id, code, log_type, system_name, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', 'edit', '".gethostname()."', NOW())"; exit;
    $conn->query("INSERT INTO disease_test_log (disease_category_id, code, log_type, system_name, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', 'edit', '".gethostbyaddr($_SERVER['REMOTE_ADDR'])."', NOW())");
    header("Location:?act=disease&sub=list");
}
else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'edit') {
$edit = $conn->query("SELECT * FROM disease_test WHERE id = '".$_REQUEST['id']."'");
    $row = $edit->fetch_assoc();
    //$_POST['disease'] = $row['disease_name'];
    $_POST['disease'] = $row['disease_category_id'];
    $_POST['location'] = $row['location'];
    $_POST['code'] = $row['code'];
    $_POST['status'] = $row['status'];
    $_POST['test'] = $row['test_name'];
    $_POST['method'] = $row['method'];
    $_POST['tat'] = $row['tat'];
    $_POST['preferred_sample_type'] = $row['preferred_sample_type'];
} else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM disease_test WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=disease&sub=list");
}
if(isset($_REQUEST['btncancel']) && $_REQUEST['btncancel']){
    header("Location:?act=disease&sub=list");
}
?>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<!--<script src="admin/js/tinymce.min.js"></script>-->
<script>tinymce.init({ selector:'textarea' });</script>
<script src="admin/js/angular-sanitize.js"></script>

<?php if(in_array($disease, explode(',', $_SESSION['role']))) {?>
<div class="container-fluid" ng-app="diseaseApp">
    <div ng-controller="diseaseCtrl">
    <h2>
        <?php
        if(isset($_REQUEST['sub']) && $_REQUEST['sub'] == "list") {
            echo "Disease Test List";
        } elseif(isset($_REQUEST['sub']) && $_REQUEST['sub'] == "add") {
            echo "Add Disease Test";
        }
        ?>

    </h2>
    <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] == "list") {?><div class="text-right"><a href="?act=disease&sub=add">Add</a></div><?php } ?> <br>
    <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] == "list") {?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info">
                <th>#</th>
                <th>Disease</th>
                <th>Code</th>
                <th>Test</th>
                <th>Method</th>
                <th>TAT</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            //SELECT dc.name as name, dt.code as code, dt.test_name as test_name, dt.method as method, dt.tat as tat FROM disease_test as dt JOIN disease_category as dc ON dc.id = dt.disease_category_id;
            //$leads = $conn->query("SELECT * FROM disease_test");
            $leads = $conn->query("SELECT  dc.name as name, dt.id as id, dt.location as location, dt.code as code, dt.test_name as test_name, dt.method as method, dt.tat as tat FROM disease_test as dt JOIN disease_category as dc ON dc.id = dt.disease_category_id");
            $i = 1;
            if($leads->num_rows > 0){
            while($row = $leads->fetch_assoc()) {?>
            <tr>
                <td><?php echo $i;?>.</td>
                <td><?php echo $row['name'];?></td>
                <td width="13%"><?php if($row['location'] == 1) echo '<img class="bangalore" src="images/bangalore.png" width="18" height="18">'; elseif($row['location'] == 2) echo '<img class="cochin" src="images/cochin.png" width="18" height="18">';?> <?php echo $row['code'];?></td>
                <td><?php echo $row['test_name'];?></td>
                <td><?php echo $row['method'];?></td>
                <td><?php echo $row['tat'];?></td>
                <td><a href="?act=disease&sub=edit&id=<?php echo $row['id'];?>">edit</a><!--/<a href="?act=disease&sub=delete&id=<?php /*echo $row['id'];*/?>">delete</a>--></td>
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
        $disease = ['Cardiology', 'Connective Tissue Disorder', 'Dermatology', 'Endocrinology', 'ENT', 'Haematology', 'Immunology', 'Metabolic Disorders', 'Nephrology',
            'Oncology - SEQUENCING', 'Neurology - MOVEMENT DISORDERS', 'Neurology - NEUROMUSCULAR', 'Neurology - OTHERS', 'Neurology - Neurology Immunology', 'Neurology - Neurology-Epilepsy', 'Neurology - Neurology-leukodystrophies', 'Oncology', 'Oncology - IMMUNOHISTOCHEMISTRY', 'Oncology - FLOWCYTOMETRY', 'Ophthalmology', 'NIPT', 'PGS', 'Miscellaneous'];
        ?>
        <form method="post">
        <div class="col-md-12">
            <select name="disease" class="form-control input-md">
                <option>-- Select Disease --</option>
                <?php
                $category = $conn->query("SELECT * FROM disease_category WHERE status = 1");
                while($row = $category->fetch_assoc()){
                ?>
                <option value="<?php echo $row['id'];?>" <?php if(isset($_POST['disease']) && $_POST['disease'] == $row['id']) echo "selected";?>><?php echo $row['name'];?></option>
                <?php } ?>
            </select> <br>
            <select name="location" class="form-control input-md">
                <option>-- Select Location --</option>
                <option value="1" <?php if(isset($_POST['location']) && $_POST['location'] == 1) echo "selected";?>>Bangalore</option>
                <option value="2" <?php if(isset($_POST['location']) && $_POST['location'] == 2) echo "selected";?>>Cochin</option>
            </select> <br>
            <input type="text" name="code" placeholder="Code ex:MGM001" class="form-control input-md" value="<?php if(isset($_POST['code'])) echo $_POST['code']?>"> <br>
            <select name="status" class="form-control input-md">
                <option>-- Select Location --</option>
                <option value="1" <?php if(isset($_POST['status']) && $_POST['status'] == 1) echo "selected";?>>Active</option>
                <option value="0" <?php if(isset($_POST['status']) && $_POST['status'] == 0) echo "selected";?>>Inactive</option>
            </select> <br>
            <textarea name="test" cols="10"><?php if(isset($_POST['test'])) echo $_POST['test']?></textarea> <br>
            <input type="text" name="method" placeholder="Method" class="form-control input-md" value="<?php if(isset($_POST['method'])) echo $_POST['method']?>"> <br>
            <input type="text" name="tat" placeholder="TAT" class="form-control input-md" value="<?php if(isset($_POST['tat'])) echo $_POST['tat']?>"> <br>
            <input type="text" name="preferred_sample_type" placeholder="Preferred Sample Type" class="form-control input-md" value="<?php if(isset($_POST['preferred_sample_type'])) echo $_POST['preferred_sample_type']?>"> <br>
            <!--<textarea name="preferred_sample_type"><?php /*echo $_POST['preferred_sample_type']*/?></textarea> <br>-->
            <input type="submit" value="Submit" name="<?php if($_REQUEST['sub'] == 'edit') echo 'btnedit'; else echo 'btnadd';?>" class="btn btn-info text-center"> <input type="submit" value="Cancel" name="btncancel" class="btn btn-info text-center"> <br> <br>
        </div>
        </form>
 <?php } ?>
    </div>
</div>
<?php } else {?>
    <div class="container-fluid permission">
        <div class="row">
            <div class="col-md-24 well text-center text-danger lead">No permission to view this page, <a href="<?php echo $site_path;?>/admin/">click here to login</a></div>
        </div>
    </div>
<?php } ?>
<script>
    var disease_app = angular.module("diseaseApp", []);
    disease_app.controller("diseaseCtrl", function ($scope) {
        alert("test");
    });
</script>
