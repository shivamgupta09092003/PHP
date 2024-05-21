<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="UploadImage.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Select file to upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if a file was uploaded
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
        // Get file information
        $fileName = $_FILES['fileToUpload']['name'];
        $fileType = $_FILES['fileToUpload']['type'];
        $fileSize = $_FILES['fileToUpload']['size'];
        $fileTmpName = $_FILES['fileToUpload']['tmp_name'];

        // Allowed file types
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        // Check if the uploaded file is an image
        if (in_array($fileType, $allowedTypes)) {
            // Define the target directory and file path
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($fileName);

            // Ensure the target directory exists
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            // Move the uploaded file to the target directory
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                echo "File has been uploaded successfully.<br>";
                echo "File Name: " . htmlspecialchars($fileName) . "<br>";
                echo "File Type: " . htmlspecialchars($fileType) . "<br>";
                echo "File Size: " . htmlspecialchars($fileSize) . " bytes<br>";
                echo "File Temporary Location: " . htmlspecialchars($fileTmpName) . "<br>";
                echo "File Location: " . htmlspecialchars($targetFile) . "<br>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only image files (JPEG, PNG, GIF) are allowed.";
        }
    } else {
        echo "No file was uploaded or there was an error uploading the file.";
    }
} else {
    // echo "Invalid request.";
}
?>
<img src="<?php echo $targetFile ?>" alt="" srcset="">

</body>
</html>