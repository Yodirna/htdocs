<?php
 include_once 'nav.php';
?>

<?php
function processUpload($name) {
$upload = $_FILES[$name];
$file_ext = pathinfo($upload['name'],PATHINFO_EXTENSION);
$file_name = uniqid("img") . '.' . $file_ext;
$target = "uploads/" . $file_name;
$file_type = mime_content_type($upload["tmp_name"]);
echo "Type of upload: " . $file_type . "<br>";

if (stripos($file_type, "image") === false) {
    echo "Upload failed - not an image ($file_type)<br>";
    return false;
}

if (move_uploaded_file($upload["tmp_name"], $target) === true) {
    echo "Upload successfull: $target<br>";
} else {
    echo "Upload failed: " . $upload["tmp_name"] . " to " . $target . "<br>";
    return false;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style> <?php include "css/style.css" ?> </style>
</head>
<body>
    
<?php
  if (isset($_FILES["picture"]) && !empty($_FILES["picture"]["tmp_name"])) {
    processUpload("picture");
    echo "FILES: " . print_r($_FILES, true);
    }

            $sql = "SELECT * from posts ORDER BY timestamp DESC";
            $result = mysqli_query($conn, $sql);
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<section>

</section>

<h1>Upload Sample</h1>

<h2>Upload Form</h2>
<form enctype="multipart/form-data" method="post">
    <input type="file" name="picture" accept="image/*">
    <input type="submit" name="btnUpload" value="Hochladen">
</form>

<?php
foreach($result as $a)

echo "<h2>Post</h2>";
echo "<br>";
echo ( $a['title'] );
echo "<br>";
echo ($a['content']);
echo "<br>";
echo "Post date:";
echo '<img class="img-fluid" src="'. $a['picture'] . '">';
echo "<br>";
echo date('d.m.Y', $a['time']);

if (isset($_FILES["picture"])) {
    processUpload("picture");
}


$dir = opendir("uploads");
while (($filename = readdir($dir)) !== false) {
    $type = mime_content_type("uploads/" . $filename);
    if (stripos($type, "image") !== false) {
        echo "<li>" . $filename . "<br>" 
            . "<img src='uploads/" . $filename . "' alt='an image' width='500'>"
            . "</li>";    
    }
}
closedir($dir);

echo "</ul>";

?>

</body>
</html>
