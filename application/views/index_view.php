<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create and Download Zip file in CodeIgniter</title>

</head>
<body>

	<form method='post' action='<?= base_url() ?>index.php/zip/createzip/'>
		<input type="submit" name="but_createzip1" value='Add file from path and download zip'>
		<input type="submit" name="but_createzip2" value='Add directory files and sub-directory, save archive and download zip'>
	</form>

</body>
</html>