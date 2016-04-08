<!DOCTYPE html>
<html>
<head>
	<title> T3 Uploader </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

	<h2> T3 Uploader Form</h2>
	<form action="uploader.php" method="post" enctype="multipart/form-data">

		<!-- Title -->
		<p> Please enter a title name for your file.
			<input type="text" name="name" placeholder="Enter title here"/>
		</p>

		<!-- Uploader -->
		<p>Upload a file in jpg, png, or gif format.<br/>
			Select File:
			<input type="file" name="userfile" />
		</p>
		<input class="btn btn-primary" type="submit" name="submit" value="Submit Upload" />

		<?php if (!empty($message)) { ?>
			<br /> <font color="#ff0000"> <?=$message?> </font>
			<?php  } ?>
		</form>

	</body>
	</html>
