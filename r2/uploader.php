<?php

if (isset($_POST["submit"])) {
	$filebasename = basename($_FILES['userfile']['name']);
	$ext = strtolower(substr($filebasename, strpos($filebasename, '.') + 1));

	if (
	($ext == "jpg" || $ext == "png" || $ext == "gif" || $ext == "pdf" || $ext == "txt")
	&& (
	$_FILES["userfile"]["type"] == "image/jpeg"
	|| $_FILES["userfile"]["type"] == "image/png"
	|| $_FILES["userfile"]["type"] == "image/gif"
	|| $_FILES["userfile"]["type"] == "image/pdf"
	|| $_FILES["userfile"]["type"] == "image/txt"
	)

	) {
		$desired_dir = "uploaderFolder/";
		$file_name = $_FILES['userfile']['name'];
		if (file_exists($desired_dir . $file_name)) {
			echo "Error! " . $file_name . " filename already exits.";
		}else {
			$image = $_FILES["userfile"]["name"]; /* Displaying Image*/
			$img = "uploaderFolder/".$image;

			move_uploaded_file($_FILES["userfile"]["tmp_name"], $desired_dir . $file_name);
			echo " Sucessfully Uploaded: " . $file_name . ". <br>";
			echo '<img width="500" max-height="500" src=" ' .$img .' ">';
		}
	}else {
		$message = "Error! File is not a valid jpg, png, pdf, gif, txt, or jpeg";
	}
}
?>
<?php require_once("index.php");?>
