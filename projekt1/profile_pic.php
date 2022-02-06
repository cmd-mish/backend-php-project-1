<h2>Dina profilbilder</h2>
<?php
    $folder = "profile_pics/";
    $content = scandir($folder);
    $no_pics = true;
    $pic_username = $_SESSION["user"];
    
    foreach($content as $row) {
      if ($row[0] !== "." && $pic_username == substr($row, 0, strlen($pic_username))) {
        print ("<img src=\"./" . $folder . $row . "\" class=\"profile-pic\">");
        $no_pics = false;
      }
    }

    if ($no_pics == true) {
      print("Inga bilder hittades!");
    }
?>

<h2>Byt profilbild</h2>

<form action="profile.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php
    $target_dir = "profile_pics/";
    $target_file = $target_dir . $_SESSION["user"] . "_" . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      
      
      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png") {
        echo "Sorry, only JPG and PNG files are allowed.";
        $uploadOk = 0;
      }
      
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded. It will appear here soon!";
          header("Refresh:5; url=./profile.php");
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }
?>