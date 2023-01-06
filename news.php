<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS</title>
  </head>
  <body>
    <h1>News</h1>
    <?php
      session_start();
      if (isset($_SESSION['userid']) && $_SESSION['userid'] == "admin") {
        // Display file upload form for admin user
        ?>
          <form action="upload_news.php" method="post" enctype="multipart/form-data">
            <h2>Upload News</h2>
            <input type="file" name="news_file" accept="image/*">
            <br>
            <input type="submit" value="Upload">
            </form>
        <?php
      }
    ?>
    <!-- Display news to all users -->
    <h2>Latest News</h2>
    <div id="news">
      <!-- News items go here -->
    </div>
  </body>
</html>