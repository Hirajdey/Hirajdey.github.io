<?php
require 'config/db.php';
?>

<div class="container-fluid">
    <h2>Diabetes Lead Users</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info">
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Organization</th>
                <th>Designation</th>
            </tr>
            </thead>
            <tbody>
            <?php $leads = $conn->query("SELECT * FROM diabetes_lead_users ORDER BY id DESC");
            $i = 1;
            while($row = $leads->fetch_assoc()) {?>
            <tr>
                <td><?php echo $i;?>.</td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['organization'];?></td>
                <td><?php echo $row['designation'];?></td>
            </tr>
            <?php $i++; } ?>
            </tbody>
        </table>
    </div>
</div>
