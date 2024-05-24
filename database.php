<?php
// Database connection variables
$db_host = 'localhost';
$db_name = 'phpnewsfeed';
$db_user = 'root';
$db_pass = '';
// Connect to database using the MySQLi interface
$conn=new mysqli($db_host,$db_name,$db_user,$db_pass);
 
if($conn->connect_error){
die("connection failed:" . $conn->connect_error);
}
// Form submit
if (isset($_POST[, $_POST['description'], $_POST['link'], $_POST['date'])) {
// Validation
if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['link']) || empty($_POST['date'])) {
$msg = '<p class="msg error">Please fill out all fields!</p>';
} else {
// Image path
$img = '';
// Upload image if exists
if (isset($_FILES['img']) && !empty($_FILES['img']['tmp_name'])) {
$img = 'images/' . $_FILES['img']['name']; move_uploaded_file($_FILES['img']['tmp_name'], $img);
}// Insert news into database using prepared statements
$stmt = mysqli_prepare($mysqli, 'INSERT INTO news (title, description, url_link, img, published_date) VALUES (?, ?, ?, ?, ?)');
if ($stmt) {
mysqli_stmt_bind_param($stmt, 'sssss', $_POST['title'], $_POST['description'], $_POST['link'], $img,
$_POST['date']); mysqli_stmt_execute($stmt); mysqli_stmt_close($stmt);
// Output response
$msg = '<p class="msg success">News created successfully!</p>';
} else {
// Error response
$msg = '<p class="msg error">Failed to insert news!</p>';
}}}
?>