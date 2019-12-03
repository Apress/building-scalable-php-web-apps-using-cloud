<?php
	function getReadOnlyConnection() {
		return new PDO("pgsql:host=localhost;" .
			"port=5432;dbname=guestbookapp;" .
			"user=gbuser;password=mypassword"
		);
	}
	function getReadWriteConnection() {
		return new PDO("pgsql:host=localhost;" .
			"port=5432;dbname=guestbookapp;" .
			"user=gbuser;password=mypassword"
		);
	}
	function getHeader() {
?>
<html>
	<head>
		<title>Guestbook App</title>
		<link rel="stylesheet" 
			href="guestbook.css" />
	</head>
	<body>
		<h1>Guestbook App</h1>
		<div id="main">
<?php
	}
	function getFooter() {
?>
		</div>
	</body>
</html>
<?php
	}
	function h($str) {
		return htmlspecialchars($str);
	}
?>
