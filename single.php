<?php
	include("common.php");
	$dbh = getReadOnlyConnection();
	$stmt = $dbh->prepare(
		"select * from gb_entries" .
		" where id = :id"
	);
	$stmt->bindValue(
		":id", 
		$_GET["id"], 
		PDO::PARAM_INT
	);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$row = $result[0];
	getHeader();
?>
<p>
	<a href="list.php">Go Back</a>
</p>

<label>Name</label> 
	<?php echo h($row["name"]) ?>
<label>Email</label> 
	<?php echo h($row["email"]) ?>
<label>Message</label> 
	<?php echo h($row["message"]) ?>
<?php
	getFooter();
?>
