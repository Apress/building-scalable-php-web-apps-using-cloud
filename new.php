<?php
	include("common.php");
	getHeader();
?>
<h2>New Guestbook Entry</h2>
<form action="create.php" method="POST">
	<label>Name</label>
	<input type="text" name="name" />

	<label>Email</label>
	<input type="text" name="email" />

	<label>Message</label>
	<textarea name="message"></textarea>

	<input type="submit" />
</form>
<?php
	getFooter();
?>
