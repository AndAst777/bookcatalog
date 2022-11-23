<pre>
    <?php
    print_r($_POST);
    ?>
</pre>


<?php
$ex = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$filename = uniqid() . '.' . $ex;

$location = "uploads/" . $filename;
move_uploaded_file($_FILES['image']['tmp_name'], $location);
$name = $_POST['bookName'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$desc = $_POST['description'];
$year = $_POST['year'];
if ($name == 0) {
    print_r("no");
}
require 'connect.php';


var_dump(mysqli_query($connect, "INSERT INTO `book` (`bookID`, `bookName`, `author`, `image`, `description`, `year`) VALUES (NULL, '$name', '$author', '$filename', '$desc', '$year')"));
