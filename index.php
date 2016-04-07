<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  please upload something:
		<input type="text" name="title" id="title">
    <input type="file" name="upload" id="upload">
    <input type="submit" value="upload" name="submit">
</form>


<input type="submit" name="insert" value="insert" onclick="insert()" />
<?php  ?>


<input type="submit" name="insert" value="insert" onclick="updategit()" />
<?php
function updategit(){
string shell_exec ( string $"git pull team3 master" );
}
?>
