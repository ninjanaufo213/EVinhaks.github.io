<?php 
$connect=mysqli_connect('localhost','root','','page');
mysqli_set_charset($connect,'utf8');
$query="SELECT * FROM Page ";
$do=mysqli_query($connect,$query);

$s=mysqli_fetch_array($do);
function Msgbox($data)	
    {	
       echo "<script>alert('".$data."')</script>";	
    }
 ?>