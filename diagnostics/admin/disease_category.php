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
    $insert = $conn->query("INSERT INTO disease_category (name, status, created_date) VALUES ('".$_POST['category']."', 1, NOW())");
    //$insert = $conn->query("INSERT INTO disease_category (disease_name, code, test_name, method, tat, created_date) VALUES ('".$_POST['disease']."', '".$_POST['code']."', '".$_POST['test']."', '".$_POST['method']."', '".$_POST['tat']."', NOW())");
    header("Location:?act=diseasecategory&sub=list");
} if(isset($_REQUEST['btnedit']) && $_REQUEST['btnedit']) {
    //echo "UPDATE disease_category SET disease_name = '".$_POST['disease']."', code = '".$_POST['code']."', test_name = '".trim($_POST['test'])."', method = '".$_POST['method']."', tat = '".$_POST['tat']."', preferred_sample_type = '".$_POST['preferred_sample_type']."' WHERE id =  '".$_REQUEST['id']."'"; exit;
    $conn->query("UPDATE disease_category SET name = '".$_POST['category']."' WHERE id =  '".$_REQUEST['id']."'");
    header("Location:?act=diseasecategory&sub=list");
}
else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'edit') {
$edit = $conn->query("SELECT * FROM disease_category WHERE id = '".$_REQUEST['id']."'");
    $row = $edit->fetch_assoc();
    //$_POST['disease'] = $row['disease_name'];
    $_POST['category'] = $row['name'];
} else if(isset($_REQUEST['id']) && $_REQUEST['sub'] == 'delete'){
    //echo "DELETE FROM disease_category WHERE id = '".$_REQUEST['id']."' LIMIT 1"; exit;
    $delete = $conn->query("DELETE FROM disease_category WHERE id = '".$_REQUEST['id']."' LIMIT 1");
    header("Location:?act=diseasecategory&sub=list");
}
if(isset($_REQUEST['btncancel']) && $_REQUEST['btncancel']){
    header("Location:?act=diseasecategory&sub=list");
}
?>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<!--<script src="admin/js/tinymce.min.js"></script>-->
<script>tinymce.init({ selector:'textarea' });</script>
<script src="admin/js/angular-sanitize.js"></script>

<?php if(in_array($disease_category, explode(',', $_SESSION['role']))) {?>
<div class="container-fluid" ng-app="diseaseApp">
    <div ng-controller="diseaseCtrl">
    <h2>Disease Category List</h2>
    <div class="text-right"><a href="?act=diseasecategory&sub=add">Add</a></div> <br>
    <?php if(isset($_REQUEST['sub']) && $_REQUEST['sub'] == "list") {?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info">
                <th>#</th>
                <th>Disease Category</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $leads = $conn->query("SELECT * FROM disease_category");
            $i = 1;
            if($leads->num_rows > 0){
            while($row = $leads->fetch_assoc()) {?>
            <tr>
                <td><?php echo $i;?>.</td>
                <td><?php echo $row['name'];?></td>
                <td><a href="?act=diseasecategory&sub=edit&id=<?php echo $row['id'];?>">edit</a><!--/<a href="?act=diseasecategory&sub=delete&id=<?php /*echo $row['id'];*/?>">delete</a>--></td>
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
            <input type="text" name="category" placeholder="Disease Category" class="form-control input-md" value="<?php if(isset($_POST['category'])) echo $_POST['category']?>"> <br>

            <input type="submit" value="Submit" name="<?php if($_REQUEST['sub'] == 'edit') echo 'btnedit'; else echo 'btnadd';?>" class="btn btn-info text-center"> <input type="submit" value="Cancel" name="btncancel" class="btn btn-info text-center"> <br> <br>
        </div>
        </form>
 <?php } ?>
    </div>
</div>
<?php } else {?>
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
