<?php
require_once('config/db.php');
 $dbb = new operations();
 $dbb->test_data();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST">
		<?php
		$dbb->display_message();
		?>
		<input type="number" name="nin" placeholder="nin...">
		<input type="text" name="name" placeholder="type your name,,,">

 <button type="submit" class="btn btn-primary" name="btn_test">Submit</button>
</form>
</body>
</html>