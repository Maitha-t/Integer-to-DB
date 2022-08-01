<?php
$conn = mysqli_connect('localhost','root','root','myproj','4306');
$intvalue = (int)$_GET['intvalue']; 
$sql = "INSERT INTO initable(intvalue) VALUES ('$intvalue')";	  
if(mysqli_query($conn , $sql)){
	echo "Integer is store"; }
	else{
       echo "Integer has not stored"; }	   
	
?> 