<?php
  session_start();
  if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != true) {
    // Redirect non-admin users to news page
    header("Location: news.php");
    exit();
  }

  if (isset($_FILES['news_file'])) {
    // File upload form was submitted
    $file = $_FILES['news_file'];

    // Allow only image files
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file['type'], $allowed_types)) {
      // Invalid file type
      // ...
    }

    // Check file size, etc.
    // ...

    // Check if file was uploaded successfully
    if ($file['error'] == UPLOAD_ERR_OK) {
      $tmp_name = $file['tmp_name'];
      $target_path = "news/" . $file['name'];
      if (move_uploaded_file($tmp_name, $target_path)) {
        // File was moved successfully
        // Save file information to database, etc.
        // ...
      } else {
        // File upload failed
        // ...
      }
    } else {
      // File upload failed
      // ...
    }
  }
?>
