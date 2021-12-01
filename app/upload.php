<!DOCTYPE html>
<html>
<body>
<?php
if (isset($_FILES["fileToUpload"])) {
    if (!isset($_POST["name"])) {
        http_response_code(400);
        return;
    }
    $target_dir = "uploads/";
    $target_file = $target_dir . $_POST["name"];
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    ?>
        <div>Upload complete!</div>
    <?php
    return;
} else {
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="text" name="name" placeholder="Name of file">
        <input type="submit" value="Upload Image">
    </form>
    <?php
}
?>
</body>
</html>
