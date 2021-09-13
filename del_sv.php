

<?php
$id = $_GET['id'];

require_once('config.php');
$query = "DELETE FROM SINH_VIEN WHERE ID = '$id'";
mysqli_query($connect, $query);
$connect->close();
header('Location: index.php'); 
