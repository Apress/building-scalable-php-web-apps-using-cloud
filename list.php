<?php 
	include("common.php");
	$dbh = getReadOnlyConnection();
	$stmt = $dbh->prepare(
		"select * from gb_entries" .
		" order by id"
	);
	$stmt->execute();
	$result = $stmt->fetchAll();
	getHeader();
?>
<a href="new.php">New Entry</a>
<ul>
<?php
	foreach($result as $row) {
		$url = "single.php?id=" . $row["id"];
?>
		<li>
			<a href="<?php echo $url ?>">
				Entry from 
				<?php echo h($row["name"]) ?>
			</a>
		</li>
<?php
	}
?>
</ul>
<?php
	getFooter();
?>
