<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  please upload something:
		<input type="text" name="title" id="title">
    <input type="file" name="upload" id="upload">
    <input type="submit" value="upload" name="submit">
</form>

<?php
echo '<input type="submit" name="submit" value="submit" onclick="updategit()" />';
function updategit(){shell_exec (string "git pull team3 master") };
?>

</body>
</html>
