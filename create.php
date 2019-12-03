<?php
	include("common.php");
	$has_img = false;
	$dbh = getReadWriteConnection();
	$stmt = $dbh->prepare(
		"insert into gb_entries" .
		"(name, email, message, has_img)" .
		"values " .
		"(:name, :email, :message, :has_img)"
	);
	$stmt->bindValue(
		":name", 
		$_POST["name"]
	);
	$stmt->bindValue(
		":email", 
		$_POST["email"]
	);
	$stmt->bindValue(
		":message", 
		$_POST["message"]
	);
	$stmt->bindValue(
		":has_img",
		$has_img,
		PDO::PARAM_BOOL
	);
	$stmt->execute();
	
	header("Location: list.php");
?>
