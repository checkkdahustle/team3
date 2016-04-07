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
function updategit(){shell_exec("time > /text.txt"); };
updategit()
?>

</body>
</html>
