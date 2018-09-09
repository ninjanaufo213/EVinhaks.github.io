<?php 
$connect=mysqli_connect('localhost','root','','page');
mysqli_set_charset($connect,'utf8');
function Msgbox($data)	
    {	
       echo "<script>alert('".$data."')</script>";	
    }
 ?>