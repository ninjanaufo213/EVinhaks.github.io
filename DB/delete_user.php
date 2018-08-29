<?php 
include 'connect.php';
if (isset($_GET["title"])){
	$title=$_GET['title'];
}
else{
	Msgbox("dit me may ko co title");
	header('Location: list_user.php');
	exit;
}
$query="DELETE FROM Page WHERE title={$title}";
$delete=mysqli_query($connect,$query) or Msgbox('ditme an lon roi');
Msgbox("{$id}");
header('Location: list_user.php');


 ?>