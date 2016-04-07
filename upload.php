<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Upload</title>
</head>
<body>


  <?php if(!empty($message)) {
    echo "<p>{$message}<p>";
    echo "<div class=image><img src='".$upload_dir."/".$target_file."'width='300'/></div>";
  } ?>
  <h2>Image Uploads</h2>
  <form action="uploads.php" enctype="multipart/form-data" method="POST">
    <input type="file" name="file_upload">
    <input type="submit" name="submit" value="Upload">
  </form>

  <pre>
    <?php print_r(get_defined_vars()); ?>
  </pre>

  <?php

  if(isset($_POST['submit'])) {


    $tmp_file = $_FILES['file_upload']['tmp_name'];


    $target_file = basename($_FILES['file_upload']['name']);
    $upload_dir = "uploads";

    if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)) {
      $messade = "file uploaded successfully.";
    }else{
      $message = "File NOT uploaded successfully";
    }

  }

  ?>

</body>
</html>