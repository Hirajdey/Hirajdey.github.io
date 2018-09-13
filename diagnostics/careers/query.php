<?php
require 'config/db.php';
if($_REQUEST['act'] == 'create') {
	//$query = $conn->query("CREATE TABLE `test` (`id` int(10) NOT NULL,`name` varchar(128) NOT NULL,`email` varchar(128) NOT NULL,`organization` varchar(128) NOT NULL,`designation` varchar(50) NOT NULL,`created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)");
	$query = $conn->query("CREATE TABLE `oncopept_download_users` (
`id` INT(10) NOT NULL AUTO_INCREMENT, PRIMARY KEY (`id`),
`name` varchar(128) NOT NULL,
`email` varchar(128) NOT NULL,
`organization` varchar(128) NOT NULL,
`designation` varchar(50) NOT NULL,
`created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)");
}
elseif($_REQUEST['act'] == 'insert'){
	$user_register = $conn->query("INSERT INTO oncopept_download_users (name, email, organization, designation, created_date) VALUES ('haja', 'haja@gmail.com', 'Med Genome', 'Senior UI/UX Developer', NOW())");
}
elseif($_REQUEST['act'] == 'records'){
	$query = $conn->query("SELECT * FROM oncopept_download_users");
?>
<table border="1">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Email</td>
		<td>Organization</td>
		<td>Designtion</td>
	</tr>
<?php
	while($row = $query->fetch_assoc()){?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['organization'];?></td>
			<td><?php echo $row['designation'];?></td>
		</tr>
<?php } ?>
</table>
<?php }
elseif(($_REQUEST['act'] == 'delete') && (isset($_REQUEST['id']))){
	$query = $conn->query("DELETE FROM oncopept_download_users WHERE id = '".$_REQUEST['id']."'");
}
?>
