<?php

   $con = mysqli_connect('localhost','root');

   if ($con) {
   				echo "Connection successful";

  			 }
  	else{
  			echo "No Connection";
  		}


  	mysqli_select_db($con, 'website_userdata');

  	$Username = $_POST['User'];
  	$Email = $_POST['Email'];
  	$mobile = $_POST['Mobile'];
  	$Comment = $_POST['comments'];

  	$query = "insert into userinfodata (Username , Email , mobile , Comment) values ('$Username', '$Email' , '$mobile' , '$Comment') ";

  	mysqli_query($con, $query);

  	header('location:index.php');

?>