<?php 
include 'connect.php';
if (isset($_GET["title"])){
	$title=$_GET['title'];
}
else{
	Msgbox("dit me may ko co title");
	
	exit;
}
$query="DELETE FROM page WHERE title='{$title}'";
$delete=mysqli_query($connect,$query) or Msgbox('ditme an lon roi');
header("Location: list_user.php")



 ?>